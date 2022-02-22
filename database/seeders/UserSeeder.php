<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new User();
        $admin->name="JoseDaniel";
        $admin->email="admin@admin.com";
        $admin->password="admin";
        $admin->role="admin";
        $admin->save();
        User::factory(25)->create();
    }
}
