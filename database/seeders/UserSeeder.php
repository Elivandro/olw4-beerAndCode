<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@example.com',
            'email_verified_at' => now(),
            'password'          => 'password',
            'role_id'           => RoleEnum::ADMIN,
            'remember_token'    => Str::random(10),
        ]);
    }
}
