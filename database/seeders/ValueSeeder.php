<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
            'title' => [
                'uz' => 'Yashil',
                'ru' => 'Зеленый'
            ],
            'attribute_id' => 3
        ]);
        Value::create([
            'title' => [
                'uz' => 'Qizil',
                'ru' => 'Красный'
            ],
            'attribute_id' => 3
        ]);
        Value::create([
            'title' => [
                'uz' => 'Qora',
                'ru' => 'Черный'
            ],
            'attribute_id' => 3
        ]);

        Value::create([
            'title' => [
                'uz' => 'MDF',
                'ru' => 'МДФ'
            ],
            'attribute_id' => 2
        ]);
        Value::create([
            'title' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП'
            ],
            'attribute_id' => 2
        ]);
        Value::create([
            'title' => [
                'uz' => 'Qora',
                'ru' => 'Черный'
            ],
            'attribute_id' => 2
        ]);
    }
}
