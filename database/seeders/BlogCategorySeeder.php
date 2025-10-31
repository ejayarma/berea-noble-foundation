<?php

namespace Database\Seeders;

use App\Models\Admin\BlogPostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Community",
            "Education",
            "Medical Support",
            "Stories",
            "Events",
        ];

        foreach ($categories as $catName) {
            BlogPostCategory::query()->createOrFirst([
                'name' => $catName,
                'slug' => Str::slug($catName),
            ]);
        }
    }
}
