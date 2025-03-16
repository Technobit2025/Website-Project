<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class GenerateHash extends Command
{
    protected $signature = 'generate:hash {password}';
    protected $description = 'Generate hashed password and show it to terminal';

    public function handle()
    {
        $password = $this->argument('password');
        if (empty($password)) {
            $this->error('Password tidak boleh kosong!');
            return;
        }
        $hashedPassword = Hash::make($password);

        $this->info('Password berhasil dihash!');
        $this->info("Password: $password");
        $this->info("Hashed Password: $hashedPassword");
    }
}
