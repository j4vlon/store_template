<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ]
        ]);
        Category::create([
            'title' => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ]
        ]);
        Category::create([
            'title' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать'
            ]
        ]);
        Category::create([
            'title' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ]
        ]);
        Category::create([
            'title' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ]
        ]);
    }
}
