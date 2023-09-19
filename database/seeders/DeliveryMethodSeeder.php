<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tekin',
                'ru' => 'Бесплатно'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 дней'
            ],
            'sum' => 0
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standard',
                'ru' => 'Стандарт'
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => '3 дня'
            ],
            'sum' => 40000
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tezkor yetkazib berish',
                'ru' => 'Быстрая доставка'
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => '1 день'
            ],
            'sum' => 80000
        ]);
    }
}
