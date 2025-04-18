<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quotes = [
            [
                'name' => 'Pierre Durand',
                'email' => 'pierre.durand@example.com',
                'phone' => '06 12 34 56 78',
                'service' => 'Branding',
                'budget' => '1000€ - 2000€',
                'message' => 'Bonjour, je suis à la recherche d\'un graphiste pour créer l\'identité visuelle de ma nouvelle entreprise de conseil en développement durable. J\'aurais besoin d\'un logo, d\'une charte graphique et de quelques modèles de documents. Merci de me contacter pour en discuter.',
                'status' => 'processed',
                'created_at' => Carbon::now()->subDays(30),
            ],
            [
                'name' => 'Marie Lambert',
                'email' => 'marie.lambert@example.com',
                'phone' => '07 23 45 67 89',
                'service' => 'Design Graphique',
                'budget' => '500€ - 1000€',
                'message' => 'Je souhaite faire réaliser des flyers et des affiches pour promouvoir mon événement culturel qui aura lieu en septembre. J\'ai déjà quelques idées de design, mais j\'ai besoin d\'un professionnel pour les concrétiser. Pouvez-vous me faire une proposition ?',
                'status' => 'processed',
                'created_at' => Carbon::now()->subDays(25),
            ],
            [
                'name' => 'Lucas Mercier',
                'email' => 'lucas.mercier@example.com',
                'phone' => '06 34 56 78 90',
                'service' => 'UI/UX Design',
                'budget' => '2000€ - 5000€',
                'message' => 'Nous développons une application mobile de fitness et nous recherchons un designer UI/UX pour créer une interface moderne et intuitive. Nous avons déjà défini les fonctionnalités principales et nous avons besoin d\'un design qui se démarque de la concurrence. Êtes-vous disponible pour ce projet ?',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(20),
            ],
            [
                'name' => 'Sophie Bertrand',
                'email' => 'sophie.bertrand@example.com',
                'phone' => '07 45 67 89 01',
                'service' => 'Illustration',
                'budget' => '300€ - 500€',
                'message' => 'Je suis auteure d\'un livre pour enfants et je cherche un illustrateur pour créer environ 10 illustrations. Le livre raconte l\'histoire d\'un petit renard qui découvre la forêt. J\'aimerais un style doux et coloré. Pouvez-vous me dire si ce projet vous intéresse ?',
                'status' => 'processed',
                'created_at' => Carbon::now()->subDays(15),
            ],
            [
                'name' => 'Antoine Dupont',
                'email' => 'antoine.dupont@example.com',
                'phone' => '06 56 78 90 12',
                'service' => 'Packaging',
                'budget' => '1000€ - 2000€',
                'message' => 'Nous lançons une nouvelle gamme de produits alimentaires bio et nous avons besoin d\'un design d\'emballage qui reflète les valeurs de notre marque : naturel, authentique et premium. Nous avons 5 produits différents qui doivent avoir une cohérence visuelle. Pouvez-vous nous aider ?',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(10),
            ],
            [
                'name' => 'Émilie Rousseau',
                'email' => 'emilie.rousseau@example.com',
                'phone' => '07 67 89 01 23',
                'service' => 'Print Design',
                'budget' => '500€ - 1000€',
                'message' => 'Je suis à la recherche d\'un graphiste pour créer une brochure de présentation pour mon cabinet d\'architecture. J\'aimerais quelque chose de minimaliste et élégant qui mette en valeur nos réalisations. La brochure devrait faire environ 12 pages. Merci de me contacter pour discuter des détails.',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(5),
            ],
            [
                'name' => 'Thomas Lefevre',
                'email' => 'thomas.lefevre@example.com',
                'phone' => '06 78 90 12 34',
                'service' => 'Branding',
                'budget' => '2000€ - 5000€',
                'message' => 'Nous sommes une startup dans le domaine de la technologie et nous avons besoin d\'une identité de marque complète. Nous recherchons un style moderne, innovant et dynamique. Le projet comprend la création d\'un logo, d\'une charte graphique, de modèles pour les réseaux sociaux et d\'un site web one-page. Êtes-vous disponible pour un tel projet ?',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(2),
            ],
            [
                'name' => 'Julie Martin',
                'email' => 'julie.martin@example.com',
                'phone' => '07 89 01 23 45',
                'service' => 'Design Graphique',
                'budget' => '300€ - 500€',
                'message' => 'Je suis à la recherche d\'un graphiste pour créer un logo pour mon blog de cuisine. J\'aimerais quelque chose de simple mais mémorable, qui reflète ma passion pour la cuisine méditerranéenne. Pouvez-vous me faire une proposition ?',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(1),
            ],
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
