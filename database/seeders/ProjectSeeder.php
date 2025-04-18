<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Refonte de l\'identité visuelle Eco-Nature',
                'slug' => 'eco-nature-branding',
                'description' => 'Refonte complète de l\'identité visuelle pour Eco-Nature, une entreprise spécialisée dans les produits écologiques. Le projet comprenait la création d\'un nouveau logo, d\'une charte graphique et de divers supports de communication.',
                'client' => 'Eco-Nature',
                'date' => 'Janvier 2023',
                'category' => 'Branding',
                'image' => 'https://images.unsplash.com/photo-1542728928-1413d1894ed1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1542728928-1413d1894ed1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Design d\'interface pour l\'application MobiFood',
                'slug' => 'mobifood-app-design',
                'description' => 'Conception de l\'interface utilisateur pour MobiFood, une application mobile de livraison de repas. Le projet comprenait la création de wireframes, de maquettes haute-fidélité et de prototypes interactifs.',
                'client' => 'MobiFood',
                'date' => 'Mars 2023',
                'category' => 'UI/UX Design',
                'image' => 'https://images.unsplash.com/photo-1616469829941-c7200edec809?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1616469829941-c7200edec809?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1616469832301-e60b7acdf78a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1616469829581-a08a74c2eb66?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Illustrations pour le magazine Lifestyle',
                'slug' => 'lifestyle-magazine-illustrations',
                'description' => 'Création d\'une série d\'illustrations pour le magazine Lifestyle. Le projet comprenait la conception d\'illustrations pour différentes rubriques du magazine, en respectant l\'identité visuelle existante.',
                'client' => 'Lifestyle Magazine',
                'date' => 'Mai 2023',
                'category' => 'Illustration',
                'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1618005198920-f0cb6201c115?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => false,
                'order' => 3,
            ],
            [
                'title' => 'Packaging pour la gamme de produits BeautyEssence',
                'slug' => 'beautyessence-packaging',
                'description' => 'Conception du packaging pour la nouvelle gamme de produits cosmétiques BeautyEssence. Le projet comprenait la création d\'un design d\'emballage cohérent pour l\'ensemble de la gamme, en mettant l\'accent sur l\'élégance et la naturalité.',
                'client' => 'BeautyEssence',
                'date' => 'Juillet 2023',
                'category' => 'Packaging',
                'image' => 'https://images.unsplash.com/photo-1576615278693-f8e095e37e01?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1576615278693-f8e095e37e01?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => true,
                'order' => 4,
            ],
            [
                'title' => 'Brochure pour le festival CultureFest',
                'slug' => 'culturefest-brochure',
                'description' => 'Conception et mise en page de la brochure pour le festival culturel CultureFest. Le projet comprenait la création d\'un design attrayant et informatif, en respectant l\'identité visuelle du festival.',
                'client' => 'CultureFest',
                'date' => 'Septembre 2023',
                'category' => 'Print Design',
                'image' => 'https://images.unsplash.com/photo-1571867424488-4565932edb41?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1571867424488-4565932edb41?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1571867424487-00d9c9adf1c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1571867424523-4260d9bf3ef9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => false,
                'order' => 5,
            ],
            [
                'title' => 'Logo et identité visuelle pour TechInnovate',
                'slug' => 'techinnovate-branding',
                'description' => 'Création du logo et de l\'identité visuelle pour TechInnovate, une startup spécialisée dans les solutions technologiques innovantes. Le projet comprenait la conception d\'un logo moderne et dynamique, ainsi que d\'une charte graphique complète.',
                'client' => 'TechInnovate',
                'date' => 'Novembre 2023',
                'category' => 'Branding',
                'image' => 'https://images.unsplash.com/photo-1553835973-dec43bfddbeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'gallery' => json_encode([
                    'https://images.unsplash.com/photo-1553835973-dec43bfddbeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1557683304-673a23048d34?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1557683311-eac922347aa1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]),
                'featured' => true,
                'order' => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
