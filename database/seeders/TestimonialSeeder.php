<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'name' => 'Sophie Martin',
                'position' => 'Directrice Marketing',
                'company' => 'Eco-Nature',
                'content' => 'Travailler avec Cissé a été une expérience exceptionnelle. Il a parfaitement compris notre vision et a créé une identité visuelle qui représente parfaitement notre marque. Son professionnalisme et sa créativité ont dépassé nos attentes.',
                'avatar' => 'https://randomuser.me/api/portraits/women/32.jpg',
                'rating' => 5,
                'featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Thomas Dubois',
                'position' => 'CEO',
                'company' => 'TechInnovate',
                'content' => 'Cissé a réalisé un travail remarquable pour notre startup. Le logo et l\'identité visuelle qu\'il a créés sont modernes, percutants et parfaitement alignés avec notre positionnement. Je recommande vivement ses services.',
                'avatar' => 'https://randomuser.me/api/portraits/men/45.jpg',
                'rating' => 5,
                'featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Camille Leroy',
                'position' => 'Directrice Artistique',
                'company' => 'Lifestyle Magazine',
                'content' => 'Les illustrations que Cissé a créées pour notre magazine ont reçu de nombreux éloges de nos lecteurs. Sa capacité à traduire nos idées en visuels captivants est impressionnante. Nous continuerons certainement à collaborer avec lui pour nos prochains numéros.',
                'avatar' => 'https://randomuser.me/api/portraits/women/68.jpg',
                'rating' => 4,
                'featured' => false,
                'order' => 3,
            ],
            [
                'name' => 'Alexandre Moreau',
                'position' => 'Responsable Produit',
                'company' => 'BeautyEssence',
                'content' => 'Le design d\'emballage créé par Cissé pour notre nouvelle gamme de produits a considérablement augmenté notre visibilité en rayon. Son approche créative et son souci du détail ont fait toute la différence. Nous sommes ravis du résultat.',
                'avatar' => 'https://randomuser.me/api/portraits/men/22.jpg',
                'rating' => 5,
                'featured' => true,
                'order' => 4,
            ],
            [
                'name' => 'Julie Petit',
                'position' => 'Coordinatrice d\'Événements',
                'company' => 'CultureFest',
                'content' => 'La brochure conçue par Cissé pour notre festival a été un véritable succès. Elle était à la fois informative et visuellement attrayante, ce qui a contribué à attirer un public nombreux. Son professionnalisme et sa réactivité ont rendu la collaboration très agréable.',
                'avatar' => 'https://randomuser.me/api/portraits/women/90.jpg',
                'rating' => 4,
                'featured' => false,
                'order' => 5,
            ],
            [
                'name' => 'Marc Lefèvre',
                'position' => 'Fondateur',
                'company' => 'MobiFood',
                'content' => 'Cissé a transformé notre application avec un design d\'interface intuitif et esthétique. Nos utilisateurs adorent la nouvelle expérience et nos téléchargements ont augmenté de 40% depuis le redesign. Je ne peux que recommander son expertise en UI/UX design.',
                'avatar' => 'https://randomuser.me/api/portraits/men/36.jpg',
                'rating' => 5,
                'featured' => false,
                'order' => 6,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
