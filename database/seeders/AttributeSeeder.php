<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create([
           'title' => 'size'
        ]);
        Attribute::create([
           'title' => 'material'
        ]);
        Attribute::create([
           'title' => 'color'
        ]);
    }
}
