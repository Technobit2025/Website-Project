<?php

namespace Tests\Feature;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use App\Models\Salary;
use Illuminate\Support\Facades\Gate; 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class TreasurerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    protected $treasurerUser;
    protected $employee;
    
    protected function setUp(): void
    {
        parent::setUp();

        
        // Membuat role treasurer
        $treasurerRole = $this->createRole('treasurer', 'Bendahara', 'Role untuk bendahara');

        Gate::define('isTreasurer', function ($user) {
            return $user->role->code === 'treasurer' || $user->role->code === 'super_admin';
        });
        
        // Membuat user dengan role treasurer
        $this->treasurerUser = $this->createUser('treasurer', 'treasurer@gmail.com');
        $this->treasurerUser->role_id = $treasurerRole->id;
        $this->treasurerUser->save();
        $this->treasurerUser->refresh();
        
        // Membuat super admin role
        $this->createRole('super_admin', 'Super Admin', 'Role untuk super admin');
        
        // Membuat beberapa roles lain
        $this->createRole('employee', 'Employee', 'Role untuk karyawan');
        
        // Membuat employee untuk testing
        $this->employee = $this->createEmployee($this->treasurerUser->id);
    }
    
    /**
     * Helper untuk membuat role
     */
    protected function createRole($code, $name, $description = null)
    {
        $role = new Role();
        $role->code = $code;
        $role->name = $name;
        $role->description = $description;
        $role->save();
        
        return $role;
    }
    
    /**
     * Helper untuk membuat user
     */
    protected function createUser($username, $email)
    {
        $user = new User();
        $user->name = $this->faker->name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make('password');
        $user->save();
        
        return $user;
    }
    
    /**
     * Helper untuk membuat employee
     */
    protected function createEmployee($userId)
    {
        $employee = new Employee();
        $employee->user_id = $userId;
        $employee->fullname = $this->faker->name;
        $employee->gender = $this->faker->randomElement(['male', 'female']);
        $employee->birth_date = $this->faker->date();
        $employee->id_number = $this->faker->unique()->numerify('################'); // 16 digit KTP
        $employee->employment_status = $this->faker->randomElement(['permanent', 'contract', 'internship', 'freelance']);
        $employee->hire_date = $this->faker->date();
        $employee->active = true;
        $employee->save();
        
        return $employee;
    }
    
    /**
     * Helper untuk membuat data salary
     */
    protected function createSalary($employeeId, $baseSalary = 5000000)
    {
        $allowance = 1000000;
        $debt = 500000;
        $totalSalary = $baseSalary + $allowance - $debt;
        
        $salary = new Salary();
        $salary->employee_id = $employeeId;
        $salary->base_salary = $baseSalary;
        $salary->allowance = $allowance;
        $salary->debt = $debt;
        $salary->total_salary = $totalSalary;
        $salary->payment_date = now();
        $salary->save();
        
        return $salary;
    }
    
    /** 
     * @test 
     * @group home
     */
    public function treasurer_can_access_home_page()
    {
        // dd($this->treasurerUser->role); 
        $this->actingAs($this->treasurerUser)   
            ->get(route('treasurer.home'))
            ->assertStatus(200)
            ->assertViewIs('treasurer.index');
            
    }
    
   
  
    
    /** 
     * @test 
     * @group salary
     */
    public function treasurer_can_view_salary_index()
    {
        $this->actingAs($this->treasurerUser)
            ->get(route('treasurer.employeesalary.index'))
            ->assertStatus(200);
    }
    
    /** 
     * @test 
     * @group salary
     */
    public function treasurer_can_view_employee_salary_details()
    {
        $this->actingAs($this->treasurerUser)
            ->get(route('treasurer.employeesalary.show', $this->employee->id))
            ->assertStatus(200);
    }
    
    /** 
     * @test 
     * @group salary
     */
    public function treasurer_can_access_create_salary_form()
    {
        $this->actingAs($this->treasurerUser)
            ->get(route('treasurer.employeesalary.create', $this->employee->id))
            ->assertStatus(200);
    }
    
    
    
    /** 
     * @test 
     * @group middleware
     */
    public function treasurer_routes_use_correct_middleware()
    {
        $this->assertRouteUsesMiddleware('treasurer.home', ['auth', 'can:isTreasurer']);
        $this->assertRouteUsesMiddleware('treasurer.employeesalary.index', ['auth', 'can:isTreasurer']);
        $this->assertRouteUsesMiddleware('treasurer.employeesalary.show', ['auth', 'can:isTreasurer']);
    }
    
    /**
     * Helper method to check if a route uses specific middleware
     */
    protected function assertRouteUsesMiddleware($routeName, array $expectedMiddleware)
    {
        $route = app('router')->getRoutes()->getByName($routeName);
        $middleware = $route->gatherMiddleware();
        
        foreach ($expectedMiddleware as $expected) {
            $this->assertContains($expected, $middleware, "Route '$routeName' does not use middleware '$expected'");
        }
    }
}