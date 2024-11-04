<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Природа',
            'Люди и Персонажи',
            'Фантастика и Фэнтези',
            'Абстракция',
            'Животные',
            'Космос и Научная фантастика',
            'Искусство и Стиль',
            'Архитектура',
            'Еда и Напитки',
            'Темные и Мрачные Темы',
            'Романтика и Эмоции',
            'Эстетика',
            'Геометрические Формы',
            'Образование и Наука',
            'Праздники и Сезоны',
        ];

        foreach ($categories as $category) {
            Category::create(['title' => $category]);
        }
    }
}
