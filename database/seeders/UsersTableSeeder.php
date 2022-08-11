<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'admin',
         ]);

         User::create([
            'name'=>'staff',
            'email'=>'reader@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'reader',
         ]);
    }
}
