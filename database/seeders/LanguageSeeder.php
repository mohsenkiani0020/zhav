<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title"     =>  "English",
                "slug"      =>  "en",
            ],
            [
                "title"     =>  "Arabic",
                "slug"      =>  "ar",
            ],
            [
                "title"     =>  "Persian",
                "slug"      =>  "fa",
            ]
        ];

        foreach ($items as $item) {
            Language::query()->create($item);
        }
    }
}
