<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $admin = User::create([
           'first_name' => 'Admin',
           'last_name' => 'Admin',
           'email' => 'test@example',
           'phone' => '+998909102030',
           'password' => Hash::make('1278966'),

        ]);

        $admin->roles()->attach(1);

        User::factory(10)->hasAttached(Role::find(2))->create();
    }
}
