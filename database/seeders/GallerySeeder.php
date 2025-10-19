<?php

namespace Database\Seeders;

use App\Models\Admin\Album;
use App\Models\Admin\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $albums = [
            [
                'title' => 'Mobile Library Launch 2024',
                'description' => 'First day of our mobile library reaching remote villages',
                'cover_image' => '/images/gallery/mobile-lib-van.jpeg',
                'category' => 'mobile-library',
                'is_published' => true,
                'sort_order' => 1,
                'photos' => [
                    [
                        'title' => 'Mobile library van',
                        'alt_text' => 'Mobile library van bringing books to rural communities',
                        'file_path' => '/images/gallery/mobile-lib-van.jpeg',
                        'category' => 'mobile-library',
                    ],
                ]
            ],
            [
                'title' => 'Children Reading Program',
                'description' => 'Exciting moments from our reading sessions',
                'cover_image' => '/images/gallery/children-excite.jpeg',
                'category' => 'children-education',
                'is_published' => true,
                'sort_order' => 2,
                'photos' => [
                    [
                        'title' => 'Children excited to receive books',
                        'alt_text' => 'Children excited to receive new books from our mobile library',
                        'file_path' => '/images/gallery/children-excite.jpeg',
                        'category' => 'children-education',
                    ],
                ]
            ],
            [
                'title' => 'Community Book Club',
                'description' => 'Weekly gatherings bringing people together through books',
                'cover_image' => '/images/gallery/weekly-gathering.jpeg',
                'category' => 'community-book-clubs',
                'is_published' => true,
                'sort_order' => 3,
                'photos' => [
                    [
                        'title' => 'Book club gathering',
                        'alt_text' => 'Weekly community book club gathering and discussion',
                        'file_path' => '/images/gallery/weekly-gathering.jpeg',
                        'category' => 'community-book-clubs',
                    ],
                ]
            ],
            [
                'title' => 'Medical Outreach March',
                'description' => 'Providing healthcare to underserved communities',
                'cover_image' => '/images/gallery/medical-volunteers.jpeg',
                'category' => 'medical-support',
                'is_published' => true,
                'sort_order' => 4,
                'photos' => [
                    [
                        'title' => 'Medical volunteers',
                        'alt_text' => 'Medical volunteers providing essential healthcare services',
                        'file_path' => '/images/gallery/medical-volunteers.jpeg',
                        'category' => 'medical-support',
                    ],
                ]
            ],
            [
                'title' => 'Village Education Fair',
                'description' => 'Annual education and community event',
                'cover_image' => '/images/gallery/rural-village.jpeg',
                'category' => 'events-outreach',
                'is_published' => true,
                'sort_order' => 5,
                'photos' => [
                    [
                        'title' => 'Village community event',
                        'alt_text' => 'Rural village community gathered for support event',
                        'file_path' => '/images/gallery/rural-village.jpeg',
                        'category' => 'events-outreach',
                    ],
                ]
            ],
            [
                'title' => 'Student Learning Sessions',
                'description' => 'Interactive classroom activities and learning',
                'cover_image' => '/images/gallery/students-engaged.jpeg',
                'category' => 'children-education',
                'is_published' => true,
                'sort_order' => 6,
                'photos' => [
                    [
                        'title' => 'Students engaged in learning',
                        'alt_text' => 'Students engaged in active learning in their classroom',
                        'file_path' => '/images/gallery/students-engaged.jpeg',
                        'category' => 'children-education',
                    ],
                ]
            ],
        ];

        foreach ($albums as $albumData) {
            $photos = $albumData['photos'];
            unset($albumData['photos']);

            $album = Album::create($albumData);

            foreach ($photos as $index => $photoData) {
                Photo::create([
                    'album_id' => $album->id,
                    'title' => $photoData['title'],
                    'alt_text' => $photoData['alt_text'],
                    'file_path' => $photoData['file_path'],
                    'category' => $photoData['category'],
                    'is_published' => true,
                    'sort_order' => $index + 1,
                ]);
            }

            $album->updatePhotoCount();
        }
    }
}
