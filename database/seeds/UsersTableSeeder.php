<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $password = bcrypt('123');
        $admin = User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => $password,
        ]);

        $auther = User::create([
            'name'      => 'auther',
            'email'     => 'auther@gmail.com',
            'password'  => $password,
        ]);

        $user = User::create([
            'name'      => 'user',
            'email'     => 'user@gmail.com',
            'password'  => $password,
        ]);

        $employee = User::create([
            'name'      => 'employee',
            'email'     => 'employee@gmail.com',
            'password'  => $password,
        ]);
       
        
    }
}
