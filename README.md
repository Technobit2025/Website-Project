# Arunika web

## Requirements

-   PHP >= 7.4
-   Composer
-   Laravel >= 8.x
-   MySQL or PostgreSQL
-   Node.js and npm

## Php Extensions

-   zip

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/Technobit2025/Website-Project.git
    ```

2. Navigate to the project directory:

    ```bash
    cd Website-Project
    ```

3. Install the dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run the database migrations and seed:

    ```bash
    php artisan migrate --seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Open your browser and visit `http://localhost:8000` to see the application in action.


## Project Structure

To generate the project structure, run the following command:

```bash
php artisan generate:structure
```

The project structure will be saved in `storage/app/project_structure.txt`.

```bash
├── app/
│   ├── Console/
│   │   └── Commands/
│   ├── DTO/
│   │   └── PresensiData.php
│   ├── Helpers/
│   │   └── Helpers.php
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Requests/
│   ├── Mail/
│   │   └── ResetPasswordMail.php
│   ├── Models/
│   │   ├── AndroidOtpToken.php
│   │   ├── AndroidPasswordResetToken.php
│   │   ├── Attendance.php
│   │   ├── Company.php
│   │   ├── CompanyAttendance.php
│   │   ├── CompanyPlace.php
│   │   ├── CompanyPresence.php
│   │   ├── CompanySchedule.php
│   │   ├── CompanyShift.php
│   │   ├── Employee.php
│   │   ├── Payroll.php
│   │   ├── PayrollComponent.php
│   │   ├── PayrollPeriod.php
│   │   ├── Permit.php
│   │   ├── Presence.php
│   │   ├── PresenceDetail.php
│   │   ├── Role.php
│   │   ├── Schedule.php
│   │   ├── State.php
│   │   └── User.php
│   ├── Notifications/
│   │   ├── AndroidOtpNotification.php
│   │   └── AndroidResetPasswordNotification.php
│   ├── Providers/
│   │   └── AppServiceProvider.php
│   └── Services/
│       ├── AndroidOtpService.php
│       ├── AndroidPasswordResetService.php
│       ├── AndroidPresensiService.php
│       └── ChangePasswordService.php
├── bootstrap/
│   ├── cache/
│   │   ├── packages.php
│   │   └── services.php
│   ├── app.php
│   └── providers.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── sanctum.php
│   ├── services.php
│   └── session.php
├── database/
│   ├── factories/
│   │   └── UserFactory.php
│   ├── migrations/
│   │   ├── 0000_00_00_000000_create_users_table.php
│   │   ├── 0000_00_00_000001_create_cache_table.php
│   │   ├── 0000_00_00_000002_create_jobs_table.php
│   │   ├── 2025_02_26_061533_create_roles_table.php
│   │   ├── 2025_02_26_062012_create_employees_table.php
│   │   ├── 2025_02_26_062241_create_personal_access_tokens_table.php
│   │   ├── 2025_02_26_062836_create_management_reports_table.php
│   │   ├── 2025_02_26_063529_create_shifts_table.php
│   │   ├── 2025_02_26_065046_create_patrols_table.php
│   │   ├── 2025_02_26_065149_create_patrol_logs_table.php
│   │   ├── 2025_03_03_123555_create_otps_table.php
│   │   ├── 2025_03_18_110130_create_companies_table.php
│   │   ├── 2025_03_18_110153_create_company_shifts_table.php
│   │   ├── 2025_03_18_110516_create_company_schedules_table.php
│   │   ├── 2025_03_18_110554_add_company_id_to_employee_table.php
│   │   ├── 2025_03_21_074744_create_company_places_table.php
│   │   ├── 2025_03_21_081228_create_company_attendances_table.php
│   │   ├── 2025_04_15_093329_create_payroll_periods_table.php
│   │   ├── 2025_04_15_102712_create_payrolls_table.php
│   │   ├── 2025_04_15_102723_create_payroll_components_table.php
│   │   ├── 2025_04_20_110145_create_company_presences_table.php
│   │   ├── 2025_04_24_042402_create_presence_details_table.php
│   │   ├── 2025_04_24_065224_add_start_and_end_time_to_company_schedules_table.php
│   │   ├── 2025_04_25_063828_create_schedules_table.php
│   │   ├── 2025_04_25_063829_create_attendances_table.php.php
│   │   ├── 2025_04_25_070800_create_presences_table.php
│   │   ├── 2025_04_28_132928_create_permits_table.php
│   │   ├── 2025_04_28_142928_create_employee_shift_schedules.php
│   │   ├── 2025_05_02_054809_add_photo_path_to_company_attendances_table.php.php
│   │   └── 2025_05_02_063211_create_get_company_attendance_history_procedure.php.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── DummySeeder.php
│       ├── PatrolSeed.php
│       ├── PresenceSeeder.php
│       └── RoleSeeder.php
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── fonts/
│   │   ├── images/
│   │   ├── js/
│   │   ├── json/
│   │   ├── pdf/
│   │   ├── scss/
│   │   └── svg/
│   ├── build/
│   │   ├── assets/
│   ├── framework/
│   │   └── views/
│   ├── storage/
│   │   └── user/
│   ├── db.sql
│   ├── favicon.ico
│   ├── index.php
│   ├── robots.txt
│   └── storage/
│       └── user/
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   ├── sass/
│   │   ├── _variables.scss
│   │   └── app.scss
│   └── views/
│       ├── auth/
│       ├── company/
│       ├── danru/
│       ├── emails/
│       ├── employee/
│       ├── errors/
│       ├── global/
│       ├── human_resource/
│       ├── layouts/
│       ├── page_layouts/
│       ├── security/
│       ├── super_admin/
│       ├── treasurer/
│       └── welcome.blade.php
├── routes/
│   ├── api.php
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   │   ├── private/
│   │   └── public/
│   ├── debugbar/
│   ├── framework/
│   │   └── cache/
│   └── logs/
├── tests/
│   ├── Feature/
│   │   ├── AuthTest.php
│   │   ├── ExampleTest.php
│   │   ├── ProfileTest.php
│   │   └── TreasurerTest.php
│   ├── Unit/
│   │   └── ExampleTest.php
│   └── TestCase.php
├── README.md
├── artisan
├── phpunit.xml
├── postcss.config.js
├── tailwind.config.js
└── vite.config.js
```