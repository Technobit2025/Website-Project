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
│   │   ├── Employee.php
│   │   ├── Role.php
│   │   ├── State.php
│   │   └── User.php
│   ├── Notifications/
│   │   ├── AndroidOtpNotification.php
│   │   └── AndroidResetPasswordNotification.php
│   ├── Providers/
│   │   └── AppServiceProvider.php
│   └── Services/
│       ├── AndroidOtpService.php
│       └── AndroidPasswordResetService.php
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
│   │   ├── 2025_02_26_064341_create_salaries_table.php
│   │   ├── 2025_02_26_064443_create_salary_transactions_table.php
│   │   ├── 2025_02_26_065046_create_patrols_table.php
│   │   ├── 2025_02_26_065149_create_patrol_logs_table.php
│   │   └── 2025_03_03_123555_create_otps_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── DummySeeder.php
│       └── RoleSeeder.php
├── public/
│   ├── assets/
│   │   ├── ajax/
│   │   ├── audio/
│   │   ├── css/
│   │   ├── fonts/
│   │   ├── images/
│   │   ├── js/
│   │   ├── json/
│   │   ├── pdf/
│   │   ├── pug/
│   │   ├── scss/
│   │   ├── svg/
│   │   └── video/
│   ├── build/
│   │   ├── assets/
│   ├── storage/
│   │   └── framework/
│   ├── db.sql
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
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
│       ├── emails/
│       ├── employee/
│       ├── errors/
│       ├── global/
│       ├── human_resource/
│       ├── layouts/
│       ├── page_layouts/
│       ├── security/
│       ├── super_admin/
│       └── welcome.blade.php
├── routes/
│   ├── api.php
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   │   ├── private/
│   │   └── project_structure.txt
│   ├── debugbar/
│   ├── framework/
│   │   ├── cache/
│   │   └── views/
│   └── logs/
├── tests/
│   ├── Feature/
│   │   ├── AuthTest.php
│   │   └── ExampleTest.php
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