<?php

namespace App\Console\Commands;

/**
 * StoredProcedureHelper Class
 *
 * Kelas ini menyediakan metode untuk memanggil prosedur tersimpan (Stored Procedures)
 * di dalam database MySQL menggunakan Laravel.
 *
 * Tujuan:
 * - Mempermudah eksekusi stored procedures tanpa harus menulis query secara manual.
 * - Memastikan kode lebih bersih dan lebih mudah dikelola.
 *
 * Struktur dan Metode:
 * - callProcedure($procedure, $params = []):
 *   -> Memanggil stored procedure dengan parameter yang diberikan.
 *   -> Menggunakan "CALL procedure_name(param1, param2, ...);" untuk eksekusi.
 *
 * Contoh Penggunaan:
 * - DB::select('CALL GetAllEmployees()');
 *
 * ======================================================================================================
 *
 * Stored Procedures yang Digunakan:
 * 1. GetAllEmployees:
 *    - Mengambil semua data karyawan dari tabel employees.
 *
 * 2. GetEmployeeById(IN p_id INT):
 *    - Mengambil data karyawan berdasarkan ID.
 *
 * 3. InsertEmployee(...):
 *    - Menambahkan karyawan baru ke dalam tabel employees.
 *
 * 4. UpdateEmployee(IN p_id INT, ...):
 *    - Memperbarui data karyawan berdasarkan ID.
 *
 * 5. DeleteEmployee(IN p_id INT):
 *    - Menghapus karyawan berdasarkan ID.
 *
 * ======================================================================================================
 *
 * Persyaratan dan Catatan:
 * - Pastikan database MySQL telah dikonfigurasi dengan benar dalam file .env Laravel.
 * - Prosedur tersimpan harus sudah dibuat di database sebelum digunakan.
 * - Gunakan metode yang sesuai dalam Employee Model untuk berinteraksi dengan prosedur tersimpan.
 * - Data yang dikirimkan dalam prosedur harus sesuai dengan tipe data kolom di tabel employees.
 *
 * ======================================================================================================
 *
 * Penggunaan di Model:
 *
 *  public static function getAll()
 *  {
 *      return DB::select('CALL GetAllEmployees()');
 *  }
 *
 *  public static function createEmployee($data)
 *  {
 *      return DB::select('CALL InsertEmployee(?, ?, ?, ?)', [
 *          $data['name'],
 *          $data['email'],
 *          $data['role_id'],
 *          $data['salary']
 *      ]);
 *  }
 *
 *  public static function updateEmployee($id, $data)
 *  {
 *      return DB::select('CALL UpdateEmployee(?, ?, ?, ?)', [
 *          $id,
 *          $data['name'],
 *          $data['email'],
 *          $data['role_id'],
 *          $data['salary']
 *      ]);
 *  }
 *
 *  public static function deleteEmployee($id)
 *  {
 *      return DB::select('CALL DeleteEmployee(?)', [$id]);
 *  }
 *
 *  public static function getEmployeeById($id)
 *  {
 *      return DB::select('CALL GetEmployeeById(?)', [$id]);
 *  }
 *
 * ======================================================================================================
 *
 * Penggunaan di Controller:
 *
 *  public function index()
 *  {
 *      $employees = Employee::getAll();
 *      return view('human_resource.employee.index', compact('employees'));
 *  }
 *
 *  public function store(Request $request)
 *  {
 *      Employee::createEmployee($request->all());
 *      return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
 *  }
 *
 *  public function update(Request $request, $id)
 *  {
 *      Employee::updateEmployee($id, $request->all());
 *      return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
 *  }
 *
 *  public function destroy($id)
 *  {
 *      Employee::deleteEmployee($id);
 *      return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
 *  }
 *
 * ======================================================================================================
 *
 * Versi: 1.0.0-beta
 * Dibuat oleh: kenndeclouv https://kenndeclouv.my.id
 * Tanggal: 25 Februari 2025
 *
 */

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\StoredProceduresSeeder;

class GenerateStoredProcedures extends Command
{
    protected $signature = 'generate:procedures';
    protected $description = 'Generate stored procedures for all tables';

    private function escapeReservedKeywords($column)
    {
        $reserved = ['key', 'order', 'group', 'rank'];
        return in_array(strtolower($column), $reserved) ? "`$column`" : $column;
    }

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = env('DB_DATABASE');
        $this->warn('Generating stored procedures for all tables...');

        foreach ($tables as $tableObj) {
            $tableName = $tableObj->{"Tables_in_$dbName"};
            $columns = Schema::getColumnListing($tableName);
            $columnTypes = $this->getColumnTypes($tableName, $columns);
            $this->generateProcedures($tableName, $columns, $columnTypes);
        }

        // $this->call(StoredProceduresSeeder::class);
        $this->info('Stored procedures generated successfully!');
    }

    private function getColumnTypes($table, $columns)
    {
        $types = [];
        foreach ($columns as $column) {
            $type = DB::select("SHOW COLUMNS FROM $table WHERE Field = ?", [$column])[0]->Type;
            if (str_contains($type, 'int')) {
                $types[$column] = 'INT';
            } elseif (str_contains($type, 'decimal') || str_contains($type, 'float') || str_contains($type, 'double')) {
                $types[$column] = 'DECIMAL(15,2)';
            } elseif (str_contains($type, 'date')) {
                $types[$column] = 'DATE';
            } elseif (str_contains($type, 'text')) {
                $types[$column] = 'TEXT';
            } else {
                $types[$column] = 'VARCHAR(255)';
            }
        }
        return $types;
    }

    private function generateProcedures($table, $columns, $columnTypes)
    {
        $tablePascal = str_replace('_', '', ucwords($table, '_')); // Konversi nama tabel ke PascalCase
        $tableSingular = rtrim($tablePascal, 's');

        $columnsList = implode(', ', array_map(fn($col) => $this->escapeReservedKeywords($col), $columns));
        $valuesList = implode(', ', array_map(fn($col) => "_$col", $columns));
        $updateList = implode(', ', array_map(fn($col) => $this->escapeReservedKeywords($col) . " = _$col", $columns));
        $paramList = implode(', ', array_map(fn($col) => "IN _$col " . $columnTypes[$col], $columns));

        $updateColumns = array_filter($columns, fn($col) => $col !== 'id');
        $updateListWithoutId = implode(', ', array_map(fn($col) => $this->escapeReservedKeywords($col) . " = _$col", $updateColumns));
        $paramListWithoutId = implode(', ', array_map(fn($col) => "IN _$col " . $columnTypes[$col], $updateColumns));

        // Stored Procedure for Insert
        $this->warn("Generating stored procedure for Insert$tableSingular...");
        DB::statement("DROP PROCEDURE IF EXISTS Insert$tableSingular");
        DB::statement("
        CREATE PROCEDURE Insert$tableSingular($paramList)
            BEGIN
                INSERT INTO $table ($columnsList) VALUES ($valuesList);
            END;
        ");

        // Stored Procedure for Update
        $this->warn("Generating stored procedure for Update$tableSingular...");
        DB::statement("DROP PROCEDURE IF EXISTS Update$tableSingular");
        DB::statement("
        CREATE PROCEDURE Update$tableSingular(IN _id INT, $paramListWithoutId)
            BEGIN
                UPDATE $table SET $updateListWithoutId WHERE id = _id;
            END;
        ");

        // Stored Procedure for Delete
        $this->warn("Generating stored procedure for Delete$tableSingular...");
        DB::statement("DROP PROCEDURE IF EXISTS Delete$tableSingular");
        DB::statement("
        CREATE PROCEDURE Delete$tableSingular(IN _id INT)
            BEGIN
                DELETE FROM $table WHERE id = _id;
            END;
        ");

        // Stored Procedure for Select by ID
        $this->warn("Generating stored procedure for Get$tableSingular...");
        DB::statement("DROP PROCEDURE IF EXISTS Get$tableSingular");
        DB::statement("
        CREATE PROCEDURE Get$tableSingular(IN _id INT)
            BEGIN
                SELECT * FROM $table WHERE id = _id;
            END;
        ");

        // Stored Procedure for Select All
        $this->warn("Generating stored procedure for GetAll$tablePascal...");
        DB::statement("DROP PROCEDURE IF EXISTS GetAll$tablePascal");
        DB::statement("
        CREATE PROCEDURE GetAll$tablePascal()
            BEGIN
                SELECT * FROM $table;
            END;
        ");

        // Stored Procedure for Dynamic Filtering
        $this->warn("Generating stored procedure for GetFiltered{$tablePascal}...");
        DB::statement("DROP PROCEDURE IF EXISTS GetFiltered{$tablePascal}");

        $paramList = [];
        $conditions = [];

        foreach ($columns as $col) {
            $type = $columnTypes[$col]; // Ambil tipe data yang udah didapat dari getColumnTypes()

            $paramList[] = "IN _$col $type"; // Pakai tipe data yang sesuai
            $conditions[] = "
            IF _$col IS NOT NULL THEN
                SET @query = CONCAT(@query, ' AND {$this->escapeReservedKeywords($col)} = ''', _$col, '''');
            END IF;";
        }

        $paramStr = implode(', ', $paramList);
        $conditionStr = implode("\n", $conditions);

        DB::statement("
            CREATE PROCEDURE GetFiltered{$tablePascal}($paramStr)
            BEGIN
                SET @query = 'SELECT * FROM $table WHERE 1=1';

                $conditionStr

                PREPARE stmt FROM @query;
                EXECUTE stmt;
                DEALLOCATE PREPARE stmt;
            END;
        ");
    }
}
