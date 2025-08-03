<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Weather historian',
                'category' => 'Weather App',
                'description' => 'What was the weather like on this day 20 years ago? See historical weather data for your location—one day at a time. No theories. No lectures. Just clear, visual data to help you understand how weather patterns have evolved over the years.',
                'logo_image' => 'projects/weather-historian.jpg',
                'banner_image' => 'projects/weather-historian.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['html', 'css', 'laravel', 'firebase']
            ],
            [
                'title' => 'Climate change',
                'category' => 'Nature App',
                'description' => 'Your go to guide for climate action',
                'logo_image' => 'projects/climate-change.jpg',
                'banner_image' => 'projects/climate-change.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['laravel', 'vue-js', 'stripe', 'redis']
            ],
            [
                'title' => 'Rate your time',
                'category' => 'SaaS Platform',
                'description' => 'Set your goal. Create your plan. Now execute—hour by hour. This app prompts you every hour to rate how productively you spent that time. Get clear daily and weekly insights into your most (and least) productive hours. Aim for just one more star next hour—and watch your productivity grow, block by block.',
                'logo_image' => 'projects/placeholder.jpg',
                'banner_image' => 'projects/placeholder.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['react', 'node-js', 'threejs', 'mongodb']
            ],
            [
                'title' => 'Class Trader',
                'category' => 'Trading Platform',
                'description' => 'We turn your trading strategies into automated code—removing emotion and leaving only the logic. The result? Consistency. That elusive quality every trader seeks, but few attain.',
                'logo_image' => 'projects/class-trader.jpg',
                'banner_image' => 'projects/class-trader.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['flutter', 'java', 'postgresql', 'kubernetes']
            ],
            [
                'title' => 'WhatsApp Hooks',
                'category' => 'Chat Plugin',
                'description' => 'Redefine marketing with AI-powered lead filtering. We eliminate spam and deliver only high-quality leads with real potential. Let bAI be your always-on sales agent—free from the limitations of human outreach.',
                'logo_image' => 'projects/whats-app-hooks.jpg',
                'banner_image' => 'projects/whats-app-hooks.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['swift', 'kotlin', 'firebase', 'supabase']
            ],
            [
                'title' => 'Digital Card',
                'category' => 'Real Estate',
                'description' => 'A smarter, more dynamic alternative to traditional business cards. Your contact info, offers, and live updates—all in one digital card that’s easy to share via tap, QR, or wallet. Always relevant. Always with you.',
                'logo_image' => 'projects/digital-cards.jpg',
                'banner_image' => 'projects/digital-cards.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['nuxt-js', 'python', 'threejs', 'postgresql']
            ],
            [
                'title' => 'Review QR',
                'category' => 'Review Service',
                'description' => 'Make it effortless for customers to leave a review. Place this QR code anywhere—your counter, packaging, signage—and direct people straight to your Google review page.',
                'logo_image' => 'projects/qr-review.jpg',
                'banner_image' => 'projects/qr-review.jpg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['nuxt-js', 'python', 'threejs', 'postgresql']
            ],
        ];

        foreach ($projects as $index => $projectData) {
            $slug = Str::slug($projectData['title']);
            
            Project::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $projectData['title'],
                    'slug' => $slug,
                    'category' => $projectData['category'],
                    'description' => $projectData['description'],
                    'technologies' => $projectData['technologies'],
                    'logo_image' => $projectData['logo_image'],
                    'banner_image' => $projectData['banner_image'],
                    'project_url' => $projectData['project_url'],
                    'is_featured' => $projectData['is_featured'],
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
