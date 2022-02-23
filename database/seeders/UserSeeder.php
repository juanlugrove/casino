<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        $admin->password="$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        $admin->role="admin";
        $admin->email_verified_at= now();
        $admin->remember_token = Str::random(10);
        $admin->save();
        $admin2=new User();
        $admin2->name="JuanLuis";
        $admin2->email="admin2@admin.com";
        $admin2->password="$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        $admin2->role="admin";
        $admin2->email_verified_at= now();
        $admin2->remember_token = Str::random(10);
        $admin2->save();
        User::factory(25)->create();
    }
}
