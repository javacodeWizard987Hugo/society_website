<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Donation;
use App\Models\Event;
use App\Models\FutureProject;
use App\Models\GalleryItem;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CommunitySeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );

        // Vision & Mission
        Setting::updateOrCreate(['key' => 'vision'], ['value' => 'To foster a harmonious, progressive, and united residential community that improves the quality of life for its members while extending care to those in need.']);
        Setting::updateOrCreate(['key' => 'mission'], ['value' => 'To enhance the wellbeing and unity of residents through cultural, educational, and developmental activities, while serving the neighboring community through meaningful social responsibility initiatives that promote dignity and sustainability.']);
        Setting::updateOrCreate(['key' => 'our_work_summary'], ['value' => 'We are a community-driven society dedicated to mutual care and support across the diverse, multi-ethnic communities of Balagolla, Kundasale, Digana, and surrounding areas in Kandy. Through compassion and collaboration, we bridge gaps through: Healthcare Support, Educational Empowerment, Culture and Harmony, and Helping Hands.']);

        // Events
        Event::create([
            'title' => 'Healthcare Donation',
            'date' => '2023-05-06',
            'description' => 'Summerfield Development Society (SDS) donated medicines to the Digana Rehabilitation Hospital.',
        ]);
        Event::create([
            'title' => 'Mega Dansel',
            'date' => '2024-06-01',
            'description' => 'Members organized "Mega Dansels" on the Kandy-Mahiyangana Road to mark Poson Poya.',
        ]);

        // Achievements
        Achievement::create([
            'title' => 'Educational Empowerment',
            'description' => 'Provided school supplies to students affected by landslides and floods in Ududumbara and Digana.',
            'date' => '2025-01-15',
        ]);
        Achievement::create([
            'title' => 'Keep the City Clean Campaign',
            'description' => 'Regularly partner with neighboring societies for "Keep the City Clean" campaigns in Balagolla.',
            'date' => '2024-03-20',
        ]);
        Achievement::create([
            'title' => '20th Anniversary',
            'description' => 'Launched a fundraising souvenir and hosted a ceremony for sponsors and the local business community.',
            'date' => '2024-10-10',
        ]);

        // Donations
        Donation::create([
            'donor_name' => 'Amateur Sri Lanka',
            'description' => 'Donated 50 chairs to support our welfare activities.',
            'date' => '2024-05-20',
        ]);

        // Future Projects
        FutureProject::create([
            'title' => 'Medical Seminar',
            'description' => 'A health workshop led by experts for local residents and the business community.',
        ]);
        FutureProject::create([
            'title' => 'Business Ethics',
            'description' => 'A seminar for local entrepreneurs on "Good Business Practices."',
        ]);

        // Gallery
        GalleryItem::create([
            'title' => 'Healthcare Project',
            'image' => 'img/project/01.jpg',
        ]);
        GalleryItem::create([
            'title' => 'Community Cleanliness',
            'image' => 'img/project/02.jpg',
        ]);
    }
}
