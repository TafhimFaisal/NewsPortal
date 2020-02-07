<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Auther']);
        Role::create(['name' => 'Employee']);
    }
}
