<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use App\Models\CompanyPlace;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Http\Controllers\Web\Company\CompanyPlaceController;

class CompanyPlaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    protected $controller;
    protected $user;
    protected $company;

    protected function setUp(): void 
    {
        parent::setUp();
        $this->controller = new CompanyPlaceController();
        
        \DB::table('roles')->insert([
        'id' => 6,
        'code' => 'company',
        'name' => 'Perusahaan Mitra',
        'created_at' => now(),
        'updated_at' => now(),
         ]);
        $this->company = Company::create([
            'name' => 'Test Company',
            'email' => 'company@example.com'
        ]);

        $this->user = User::create([
            'name' => 'Test User',
            'role_id'=> 6,
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
         $this->employee = Employee::create([
            'user_id' => $this->user->id,
            'fullname' => 'Test User',
            'gender' => 'male',
            'birth_date' => '2000-01-01',
            'id_number' => '1234567890',
            'employment_status' => 'permanent',
            'hire_date' => now()->toDateString(),
            // Tambahkan jika company_id memang ada di migration:
            'company_id' => $this->company->id,
        ]);
        // dd($this->company->id);
        Auth::login($this->user);
    }

    #[Test]
    public function index_return_view_with_places()
    {
        for($i = 0; $i < 3; $i++){
            $place = new CompanyPlace();
            $place->company_id = $this->company->id;
            $place->code = '4042020'.$i;
            $place->name = "kantor 1";
            $place->address = "Meksiko";
            $place->latitude = -8.0983000;
            $place->longitude = 112.1680000;
            $place->description = "tempat bekerja";
            $place->save();
        }
        $response = $this->controller->index();

        $this->assertEquals('company.place.index', $response->getName());
        $this->assertArrayHasKey('companyPlaces',$response->getData());
        $this->assertArrayHasKey('company',$response->getData());
        $this->assertCount(3,$response->getData()['companyPlaces']);
    }

    #[Test]
    public function store_creates_place_and_redirects()
    {
             
    }

    #[Test]
    public function show_return_view_with_place()
    {
        $place = new CompanyPlace();
        $place->company_id = $this->company->id;
        $place->code = '4042020';
        $place->name = "Kantor 1";
        $place->address = "Meksiko";
        $place->latitude = -8.0983000;
        $place->longitude = 112.1680000;
        $place->description = "Tempat Bekerja";
        $place->save();
        
        $response = $this->controller->show($place->id);
      
        $this->assertEquals('company.place.show',$response->getName());
        $this->assertArrayHasKey('companyPlace',$response->getData());
        $this->assertEquals($place->id, $response->getData()['companyPlace']->id);
    }

    #[Test]
    public function edit_returns_view_with_place()
    {
        $place = new CompanyPlace();
        $place->company_id = $this->company->id;
        $place->code = '4042020';
        $place->name = "Kantor 1";
        $place->address = "Meksiko";
        $place->latitude = -8.0983000;
        $place->longitude = 112.1680000;
        $place->description = "Tempat Bekerja";
        $place->save();
        $response = $this->controller->edit($place->id);
        dd($response);
    }
}
