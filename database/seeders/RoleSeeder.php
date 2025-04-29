<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Dokumentasi RoleSeeder
     *
     * Seeder ini bertanggung jawab untuk mengisi tabel role dengan role yang telah ditentukan.
     *
     * Role didefinisikan sebagai array asosiatif dengan kunci berikut:
     * - name: Nama tampilan dari role (misalnya, 'Super Admin').
     * - code: Kode unik yang mewakili role (misalnya, 'super_admin').
     *
     * Untuk menambahkan role baru, cukup tambahkan array asosiatif baru ke array $roles
     * di metode run. Pastikan bahwa 'code' adalah unik untuk menghindari konflik dan menggunakan penulisan snake case
     * karena ini akan sangat berpengaruh jalannya sistem, banyak dari sistem ini menggunakan sistem otomatis jika penulisan code salah,
     * maka akan memicu error yang fatal.
     *
     * Contoh menambahkan role baru:
     * [
     *     'name' => 'Nama Role Baru',
     *     'code' => 'kode_role_baru',
     * ],
     *
     * Setelah mendefinisikan role, seeder akan mengiterasi melalui array $roles
     * dan membuat setiap role di database menggunakan model Role.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Admin', 'code' => 'super_admin', 'description' => 'Super Admin, memiliki akses ke semua fitur dan data di sistem.'],
            ['name' => 'Human Resource', 'code' => 'human_resource', 'description' => 'Human Resource, memiliki akses ke fitur dan data karyawan.'],
            ['name' => 'Employee', 'code' => 'employee', 'description' => 'Employee, hanya memiliki akses ke fitur karyawan.'],
            ['name' => 'Security', 'code' => 'security', 'description' => 'Security, hanya memiliki akses ke fitur keamanan.'],
            ['name' => 'Bendahara', 'code' => 'treasurer', 'description' => 'Bendahara, hanya memiliki akses ke fitur keuangan.'],
            ['name' => 'Perusahaan Mitra', 'code' => 'company', 'description' => 'Perusahaan Mitra, hanya memiliki akses ke fitur perusahaan mitra.'],
            ['name' => 'Danru', 'code' => 'danru', 'description' => 'Komandan regu'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['code' => $role['code']], $role);
        }
    }
}
