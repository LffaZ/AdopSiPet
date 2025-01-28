<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# AdopSiPet: Pet Adoption Web Application

## About
This is a web application designed to help people **adopt or give away pets** to trusted individuals. The application is built using **Laravel** and leverages **Laravel Breeze** for authentication and **Tailwind CSS** for styling.


## Features

- **User Authentication**: Users can register, log in, and manage their profiles using **Laravel Breeze** authentication system.
- **Pet Listings**: Users can post pets available for adoption and view available pets.
- **Pet Search**: Allows searching for pets by type, age, and location.
- **Admin Panel**: Admins can manage pet listings and user data.

## Tech Stack

- **Backend**: Laravel (PHP)
- **Authentication**: Laravel Breeze 
- **Frontend**: Tailwind CSS, Alpine.js, Flowbite, and Vite 
- **Database**: MySQL
- **Build Tool**: Vite 
- **Charts**: ApexCharts 
- **Image Cropping**: CropperJS

## Installation
To set up this project locally, follow the steps below:

### 1. Clone the repository
```bash
git clone https://github.com/LffaZ/AdopSiPet.git
cd AdopSiPet
```

### 2. Install PHP dependencies (Laravel)
Make sure you have [Composer](https://getcomposer.org/) installed, then run:
```bash
composer install
```

### 3. Install Node.js dependencies
Ensure you have **Node.js** and **npm** installed, then run:
```bash
npm install
```

### 4. Set up your `.env` file
Copy the `.env.example` file and rename it to `.env`:
```bash
cp .env.example .env
```
Make sure you configure the database connection and other environment variables in the `.env` file.

### 5. Generate Laravel application key
```bash
php artisan key:generate
```

### 6. Run migrations
Set up the database tables by running:
```bash
php artisan migrate
```

### 7. Build and serve the front-end
Vite is used to build the front-end assets. Run the following command to start the development server:
```bash
npm run dev
```

This will run Vite’s dev server, which will automatically compile your assets and reload the page when you make changes.

### 8. Start the Laravel development server
Finally, start the Laravel server:
```bash
php artisan serve
```

Your application should now be running at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Additional Notes:
- If you encounter any issues during installation, ensure you have the correct PHP and Node.js versions installed.
- For production builds, you can use `npm run build` to optimize the assets, and then deploy the Laravel app to your hosting provider.
