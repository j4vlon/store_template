<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::create([
            "role" => "admin"
        ]);
        Role::create([
            "role" => "customer"
        ]);
        Role::create([
            "role" => "shop_manager"
        ]);
    }
}
