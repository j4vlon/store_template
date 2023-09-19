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
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличными'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Karta orqali',
                'ru' => 'Оплата картой'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличными'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличными'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличными'
            ]
        ]);
    }
}
