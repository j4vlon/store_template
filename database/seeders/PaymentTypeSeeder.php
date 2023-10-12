<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run(): void
    {
        PaymentType::create([
            'title' => [
                'uz' => 'Naqd',
                'ru' => 'Наличными'
            ]
        ]);

        PaymentType::create([
            'title' => [
                'uz' => 'Karta orqali',
                'ru' => 'Оплата картой'
            ]
        ]);

        PaymentType::create([
            'title' => [
                'uz' => 'Click',
                'ru' => 'Click'
            ]
        ]);

        PaymentType::create([
            'title' => [
                'uz' => 'Payme',
                'ru' => 'Payme'
            ]
        ]);

        PaymentType::create([
            'title' => [
                'uz' => 'Uzum',
                'ru' => 'Uzum'
            ]
        ]);
    }
}
