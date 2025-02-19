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
