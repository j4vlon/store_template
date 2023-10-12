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
            'title' => [
                'uz' => 'Bepul',
                'ru' => 'Бесплатно'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 дней'
            ],
            'price' => 0
        ]);

        DeliveryMethod::create([
            'title' => [
                'uz' => 'Standard',
                'ru' => 'Стандарт'
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => '3 дня'
            ],
            'price' => 40000
        ]);

        DeliveryMethod::create([
            'title' => [
                'uz' => 'Tezkor yetkazib berish',
                'ru' => 'Быстрая доставка'
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => '1 день'
            ],
            'price' => 80000
        ]);
    }
}
