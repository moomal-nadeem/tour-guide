<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = [
            'name' => 'Admin',
            'email' => 'moomalnadeem09@gmail.com',
            'password' => bcrypt('password'),
        ];
        Admin::create($admin);
    }
    
}
