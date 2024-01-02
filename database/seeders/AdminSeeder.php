<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $admin = [
            // ['name'  => 'Admin','email' => 'admin@admin.com','password' =>bcrypt('password')],
            // ['name'  => 'Editor','email' => 'editor@editor.com','password' =>bcrypt('password')],
            // ['name'  => 'Author','email' => 'author@author.com','password' =>bcrypt('password')],
            ['name'  => 'Admin','email' => 'momviseu@gmail.com','password' =>bcrypt('Viseu12345')],
        ];
        Admin::insert($admin);
    }
}
