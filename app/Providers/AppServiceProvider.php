<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Dokumentasi Gate Otomatis
         *
         * Bagian kode ini mendefinisikan gate otomatis untuk setiap peran yang ada dalam aplikasi.
         * Gate digunakan untuk mengelola izin akses pengguna berdasarkan peran mereka.
         *
         * Setiap gate dinamai dengan format 'is' diikuti oleh nama peran yang ditulis dalam format CamelCase.
         * Contoh: untuk peran 'administration_admin', gate akan dinamai 'isAdministrationAdmin'.
         * Pastikan penulisan code role menggunakan snake case
         *
         * Fungsi gate ini memeriksa apakah pengguna yang terautentikasi memiliki peran yang sesuai
         * dengan gate yang sedang diperiksa. Jika kode peran pengguna sama dengan kode peran yang
         * didefinisikan dalam gate, maka akses akan diberikan.
         *
         * Penggunaan gate ini memungkinkan pengembang untuk dengan mudah mengelola izin akses
         * di seluruh aplikasi dengan cara yang terstruktur dan terorganisir.
         * 
         * Gate hanya akan dijalankan jika aplikasi berjalan dalam mode web.
         * 
         * Pengecualian untuk role super_admin, super_admin akan memiliki semua akses.
         */
        if (!App::runningInConsole() && Schema::hasTable('roles')) {
            foreach (Role::all() as $role) {
                $gateName = 'is' . str_replace(' ', '', ucwords(str_replace('_', ' ', $role->code)));
                Gate::define($gateName, function ($user) use ($role) {
                    if ($user->role->code === 'super_admin') {
                        return true;
                    }
                    return $user->role->code === $role->code;
                });
            }
        }
    }
}
