<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            // Persian
            [
                "title"       => "عمومی",
                "fontawesome" => "fa-earth-americas",
                "language_id" => 3,
            ],
            [
                "title"       => "دیجیتال مارکتینگ",
                "fontawesome" => "fa-display-chart-up-circle-dollar",
                "language_id" => 3,
            ],
            [
                "title"       => "وب سایت",
                "fontawesome" => "fa-language",
                "language_id" => 3,
            ],
            [
                "title"       => "وردپرس",
                "fontawesome" => "fa-magnifying-glass-chart",
                "language_id" => 3,
            ],
            [
                "title"       => "PHP",
                "fontawesome" => "fa-users-gear",
                "language_id" => 3,
            ],
            [
                "title"       => "Python",
                "fontawesome" => "fa-lightbulb-gear",
                "language_id" => 3,
            ],
            [
                "title"       => "Laravel",
                "fontawesome" => "fa-lightbulb-gear",
                "language_id" => 3,
            ],
            [
                "title"       => "React",
                "fontawesome" => "fa-lightbulb-gear",
                "language_id" => 3,
            ],
            [
                "title"       => "Javascript",
                "fontawesome" => "fa-lightbulb-gear",
                "language_id" => 3,
            ],
            [
                "title"       => "Django",
                "fontawesome" => "fa-lightbulb-gear",
                "language_id" => 3,
            ],


            // Persian

            // French

        ];

        foreach ($items as $item) {
            $articleCategoryObj = new ArticleCategory($item);
            $articleCategoryObj->saveQuietly();

        }
    }
}
