<?php

namespace Database\Seeders;

use App\Models\Admin\Album;
use App\Models\Admin\GalleryCategory;
use App\Models\Admin\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class GalleryCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            "Mobile Library",
            "Children & Education",
            "Medical Support",
            "Events & Outreach",
        ];

        foreach ($categories as $catName) {
            GalleryCategory::query()->createOrFirst([
                'name' => $catName,
                'slug' => Str::slug($catName),
            ]);
        }
    }
}
