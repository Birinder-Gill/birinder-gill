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
                'title' => 'Dottie',
                'category' => 'Dating App',
                'description' => 'A revolutionary dating platform designed specifically for people with disabilities, promoting inclusive connections and meaningful relationships with accessibility at its core.',
                'logo_image' => 'projects/dottie.jpeg',
                'banner_image' => 'projects/dottie_banner.jpeg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['react-native', 'mysql', 'aws', 'firebase']
            ],
            [
                'title' => 'ShopFlow',
                'category' => 'E-Commerce',
                'description' => 'A modern e-commerce platform with advanced inventory management, real-time analytics, and seamless payment integration designed for scalable online retail operations.',
                'logo_image' => 'projects/shopflow.jpeg',
                'banner_image' => 'projects/shopflow_banner.jpeg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['laravel', 'vue-js', 'stripe', 'redis']
            ],
            [
                'title' => 'DataViz Pro',
                'category' => 'SaaS Platform',
                'description' => 'An intelligent data visualization platform that transforms complex datasets into actionable insights with interactive charts, real-time monitoring, and custom reporting.',
                'logo_image' => 'projects/dataviz-pro.jpeg',
                'banner_image' => 'projects/dataviz-pro_banner.jpeg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['react', 'node-js', 'threejs', 'mongodb']
            ],
            [
                'title' => 'SecureBank',
                'category' => 'FinTech',
                'description' => 'A secure mobile banking application with biometric authentication, real-time transactions, budget tracking, and advanced fraud detection for modern digital banking.',
                'logo_image' => 'projects/securebank.jpeg',
                'banner_image' => 'projects/securebank_banner.jpeg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['flutter', 'java', 'postgresql', 'kubernetes']
            ],
            [
                'title' => 'FitTracker',
                'category' => 'Health App',
                'description' => 'A comprehensive fitness companion with personalized workout plans, nutrition tracking, progress analytics, and social features to motivate healthy lifestyle choices.',
                'logo_image' => 'projects/fittracker.jpeg',
                'banner_image' => 'projects/fittracker_banner.jpeg',
                'project_url' => null,
                'is_featured' => true,
                'technologies' => ['swift', 'kotlin', 'firebase', 'supabase']
            ],
            [
                'title' => 'PropertyHub',
                'category' => 'Real Estate',
                'description' => 'An innovative real estate platform with virtual tours, AI-powered property matching, market analytics, and streamlined transaction management for buyers and sellers.',
                'logo_image' => 'projects/propertyhub.jpeg',
                'banner_image' => 'projects/propertyhub_banner.jpeg',
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
