<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            // Frontend Frameworks & Libraries
            ['title' => 'React', 'slug' => 'react', 'image' => 'technologies/react.png'],
            ['title' => 'Vue.js', 'slug' => 'vue-js', 'image' => 'technologies/vue-js.png'],
            ['title' => 'Angular', 'slug' => 'angular', 'image' => 'technologies/angular.png'],
            ['title' => 'Svelte', 'slug' => 'svelte', 'image' => 'technologies/svelte.png'],
            ['title' => 'Nuxt.js', 'slug' => 'nuxt-js', 'image' => 'technologies/nuxt-js.png'],
            
            // Mobile Development
            ['title' => 'React Native', 'slug' => 'react-native', 'image' => 'technologies/react-native.png'],
            ['title' => 'Flutter', 'slug' => 'flutter', 'image' => 'technologies/flutter.png'],
            ['title' => 'Swift', 'slug' => 'swift', 'image' => 'technologies/swift.png'],
            ['title' => 'Kotlin', 'slug' => 'kotlin', 'image' => 'technologies/kotlin.png'],
            
            // Backend & Languages
            ['title' => 'Laravel', 'slug' => 'laravel', 'image' => 'technologies/laravel.png'],
            ['title' => 'Node.js', 'slug' => 'node-js', 'image' => 'technologies/node-js.png'],
            ['title' => 'Python', 'slug' => 'python', 'image' => 'technologies/python.png'],
            ['title' => 'Java', 'slug' => 'java', 'image' => 'technologies/java.png'],
            ['title' => 'TypeScript', 'slug' => 'typescript', 'image' => 'technologies/typescript.png'],
            
            // Databases
            ['title' => 'MySQL', 'slug' => 'mysql', 'image' => 'technologies/mysql.png'],
            ['title' => 'PostgreSQL', 'slug' => 'postgresql', 'image' => 'technologies/postgresql.png'],
            ['title' => 'MongoDB', 'slug' => 'mongodb', 'image' => 'technologies/mongodb.png'],
            ['title' => 'SQLite', 'slug' => 'sqlite', 'image' => 'technologies/sqlite.png'],
            ['title' => 'Redis', 'slug' => 'redis', 'image' => 'technologies/redis.png'],
            
            // Cloud & Services
            ['title' => 'AWS', 'slug' => 'aws', 'image' => 'technologies/aws.png'],
            ['title' => 'Firebase', 'slug' => 'firebase', 'image' => 'technologies/firebase.png'],
            ['title' => 'Supabase', 'slug' => 'supabase', 'image' => 'technologies/supabase.png'],
            ['title' => 'Kubernetes', 'slug' => 'kubernetes', 'image' => 'technologies/kubernetes.png'],
            
            // Styling & UI
            ['title' => 'Tailwind CSS', 'slug' => 'tailwind-css', 'image' => 'technologies/tailwind-css.png'],
            ['title' => 'Material UI', 'slug' => 'material-ui', 'image' => 'technologies/material-ui.png'],
            ['title' => 'Bootstrap', 'slug' => 'bootstrap', 'image' => 'technologies/bootstrap.png'],
            ['title' => 'CSS', 'slug' => 'css', 'image' => 'technologies/css.png'],
            ['title' => 'HTML', 'slug' => 'html', 'image' => 'technologies/html.png'],
            
            // Tools & Libraries
            ['title' => 'Three.js', 'slug' => 'threejs', 'image' => 'technologies/threejs.png'],
            ['title' => 'jQuery', 'slug' => 'jquery', 'image' => 'technologies/jquery.png'],
            ['title' => 'Vite', 'slug' => 'vite', 'image' => 'technologies/vite.png'],
            ['title' => 'Babel', 'slug' => 'babel', 'image' => 'technologies/babel.png'],
            ['title' => 'NPM', 'slug' => 'npm', 'image' => 'technologies/npm.png'],
            
            // Payment & CMS
            ['title' => 'Stripe', 'slug' => 'stripe', 'image' => 'technologies/stripe.png'],
            ['title' => 'WordPress', 'slug' => 'wordpress', 'image' => 'technologies/wordpress.png'],
        ];

        foreach ($technologies as $tech) {
            Technology::updateOrCreate(
                ['slug' => $tech['slug']],
                [
                    'title' => $tech['title'],
                    'slug' => $tech['slug'],
                    'image' => $tech['image'],
                    'is_active' => true,
                ]
            );
        }
    }
}
