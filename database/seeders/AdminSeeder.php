<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'level'=> 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('Admin123'),
        ]);
        $this->command->info('User Admin Telah Dibuat');
    }
}
