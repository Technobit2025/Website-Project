<?php

//perubahan namespace
namespace Tests\Feature;

use App\Http\Controllers\Web\Company\CompanyScheduleController;
use App\Models\Company;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Attributes\Test;

class CompanyScheduleTest extends TestCase
{
    use RefreshDatabase;

    protected $controller;
    protected $company;
    protected $employee;
    protected $user;
    protected $shift;

    protected function setUp(): void
    {
        parent::setUp();

        $this->controller = new CompanyScheduleController();

        // Create a company
        $this->company = Company::create([
            'name' => 'Test Company',
            'email' => 'company@example.com',
        ]);

        // Create a user
        $this->user = User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create an employee
        $this->employee = Employee::create([
            'user_id' => $this->user->id,
            'fullname' => 'Test User',
            'gender' => 'male',
            'birth_date' => '2000-01-01',
            'id_number' => '1234567890',
            'employment_status' => 'permanent',
            'hire_date' => now()->toDateString(),
            'company_id' => $this->company->id,
        ]);

        // Create a shift
        $this->shift = CompanyShift::create([
            'company_id' => $this->company->id,
            'name' => 'Morning Shift',
            'start_time' => '08:00',
            'end_time' => '16:00',
            'color' => '#00FF00',
            'late_time' => '08.30',
            'checkout_time'=> '15.30'
        ]);

        Auth::login($this->user);
    }
    #[Test]
    public function index_returns_view_with_correct_data()
    {
        // Create request with no month specified
        $request = new Request();

        $response = $this->controller->index($this->company, $request);

        // Check view name
        $this->assertEquals('super_admin.company.schedule.index', $response->getName());

        // Check data passed to view
        $viewData = $response->getData();
        $this->assertArrayHasKey('employees', $viewData);
        $this->assertArrayHasKey('companyName', $viewData);
        $this->assertArrayHasKey('shifts', $viewData);
        $this->assertArrayHasKey('schedules', $viewData);
        $this->assertArrayHasKey('currentMonth', $viewData);
        $this->assertArrayHasKey('daysInMonth', $viewData);
        $this->assertArrayHasKey('companyId', $viewData);

        // Check specific values
        $this->assertEquals($this->company->id, $viewData['companyId']);
        $this->assertEquals($this->company->name, $viewData['companyName']);
        $this->assertEquals(Carbon::now()->format('Y-m'), $viewData['currentMonth']);
        $this->assertCount(1, $viewData['employees']);
        $this->assertCount(1, $viewData['shifts']);
    }

    #[Test]
    public function index_with_specific_month()
    {
        // Create request with specific month
        $specificMonth = '2023-05';
        $request = new Request(['month' => $specificMonth]);

        $response = $this->controller->index($this->company, $request);

        // Check data passed to view
        $viewData = $response->getData();
        $this->assertEquals($specificMonth, $viewData['currentMonth']);
        $this->assertEquals(Carbon::parse($specificMonth)->daysInMonth, $viewData['daysInMonth']);
    }

    #[Test]
    public function save_creates_new_schedule()
    {
        // Data for new schedule
        $data = [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
            'old_date' => null
        ];
        
        $request = new Request($data);

        $request = Request::create('/fake-url','POST',$data);

        // Call the save method
        $response = $this->controller->save($request);

        // Check response
        $this->assertInstanceOf(JsonResponse::class, $response);
        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals('Schedule saved!', $responseData['message']);

        // Check database
        $this->assertDatabaseHas('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
        ]);
    }

    #[Test]
    public function save_updates_existing_schedule()
    {
        // Create an existing schedule
        $existingSchedule = CompanySchedule::create([
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
        ]);

        // Create another shift for update
        $newShift = CompanyShift::create([
            'company_id' => $this->company->id,
            'name' => 'Evening Shift',
            'start_time' => '16:00',
            'end_time' => '00:00',
            'color' => '#FF0000',
            'late_time' => '08.30',
            'checkout_time' => '15.30'
        ]);

        // Data for updating schedule
        $data = [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $newShift->id,
            'old_date' => null
        ];

        $request = new Request($data);
        $request = Request::create('/fake-url','POST',$data);
        

        // Call the save method
        $response = $this->controller->save($request);

        // Check response
        $this->assertInstanceOf(JsonResponse::class, $response);

        // Check database
        $this->assertDatabaseHas('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $newShift->id,
        ]);
    }

    #[Test]
    public function save_with_old_date_different_employee()
    {
        // Create an existing schedule for a different employee
        $anotherEmployee = Employee::create([
            'user_id' => $this->user->id,
            'fullname' => 'Another Employee',
            'gender' => 'female',
            'birth_date' => '1995-01-01',
            'id_number' => '9876543210',
            'employment_status' => 'permanent',
            'hire_date' => now()->toDateString(),
            'company_id' => $this->company->id,
        ]);

        $existingSchedule = CompanySchedule::create([
            'company_id' => $this->company->id,
            'employee_id' => $anotherEmployee->id,
            'date' => '2023-05-10',
            'company_shift_id' => $this->shift->id,
        ]);

        // Data for new schedule with old date reference
        $data = [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
            'old_date' => '2023-05-10',
            'old_employee' => $anotherEmployee->id,
        ];

        $request = new Request($data);

        $request =Request::create('/fake-url','POST',$data);

        // Call the save method
        $response = $this->controller->save($request);

        // Check old schedule is deleted
        $this->assertDatabaseMissing('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $anotherEmployee->id,
            'date' => '2023-05-10',
        ]);

        // Check new schedule is created
        $this->assertDatabaseHas('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
        ]);
    }

    #[Test]
    public function save_with_old_date_same_employee()
    {
        // Create an existing schedule
        $existingSchedule = CompanySchedule::create([
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-10',
            'company_shift_id' => $this->shift->id,
        ]);

        // Data for new schedule with old date reference
        $data = [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
            'old_date' => '2023-05-10',
            'old_employee' => $this->employee->id,
        ];

        $request = new Request($data);

        $request = Request::create('/fake-url','POST',$data);

        // Call the save method
        $response = $this->controller->save($request);

        // Check old schedule is deleted
        $this->assertDatabaseMissing('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-10',
        ]);

        // Check new schedule is created
        $this->assertDatabaseHas('company_schedules', [
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
        ]);
    }

    #[Test]
    public function destroy_deletes_schedule()
    {
        // Create a schedule to be deleted
        $schedule = CompanySchedule::create([
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
            'company_shift_id' => $this->shift->id,
        ]);

        // Create request to delete the schedule
        $request = new Request([
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2023-05-15',
        ]);

        // Call the destroy method
        $response = $this->controller->destroy($request);

        // Check response
        $this->assertInstanceOf(JsonResponse::class, $response);
        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals(1,$responseData['success']);

        // Check database
        $this->assertDatabaseMissing('company_schedules', [
            'id' => $schedule->id,
        ]);
    }

    #[Test]
    public function destroy_with_nonexistent_schedule()
    {
        // Create request with non-existent data
        $request = new Request([
            'company_id' => $this->company->id,
            'employee_id' => $this->employee->id,
            'date' => '2099-01-01', // Date that doesn't exist in schedules
        ]);

        // Call the destroy method
        $response = $this->controller->destroy($request);

        // Check response
        $this->assertInstanceOf(JsonResponse::class, $response);
        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals(0,$responseData['success']); // Should be false since nothing was deleted
    }
}