<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Web Design
        $webDesign = Service::create([
            'title' => 'Web Design',
            'slug' => 'web-design',
            'description' => 'Création de sites web modernes et responsifs adaptés à votre image de marque et optimisés pour tous les appareils.',
            'image' => 'https://placehold.co/600x400',
            'price' => 600.00,
            'price_label' => 'À partir de 600€',
            'is_featured' => true,
            'order' => 1,
        ]);

        $webDesignFeatures = [
            'Design responsive adapté à tous les écrans',
            'Interface utilisateur intuitive',
            'Optimisation pour les moteurs de recherche',
            'Compatibilité multi-navigateurs',
        ];

        foreach ($webDesignFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $webDesign->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }

        // UI/UX Design
        $uiUxDesign = Service::create([
            'title' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'description' => 'Conception d\'interfaces utilisateur et d\'expériences utilisateur qui optimisent l\'engagement et la satisfaction des utilisateurs.',
            'image' => 'https://placehold.co/600x400',
            'price' => 800.00,
            'price_label' => 'À partir de 800€',
            'is_featured' => true,
            'order' => 2,
        ]);

        $uiUxFeatures = [
            'Wireframes et prototypes interactifs',
            'Tests utilisateurs',
            'Analyse de l\'expérience utilisateur',
            'Design d\'interface moderne',
        ];

        foreach ($uiUxFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $uiUxDesign->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }

        // Design Graphique
        $graphicDesign = Service::create([
            'title' => 'Design Graphique',
            'slug' => 'graphic-design',
            'description' => 'Création d\'identités visuelles et de supports de communication qui reflètent l\'essence de votre marque.',
            'image' => 'https://placehold.co/600x400',
            'price' => 500.00,
            'price_label' => 'À partir de 500€',
            'is_featured' => false,
            'order' => 3,
        ]);

        $graphicFeatures = [
            'Création de logo',
            'Charte graphique complète',
            'Supports imprimés',
            'Illustrations personnalisées',
        ];

        foreach ($graphicFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $graphicDesign->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }

        // Design Mobile
        $mobileDesign = Service::create([
            'title' => 'Design Mobile',
            'slug' => 'mobile-design',
            'description' => 'Conception d\'interfaces pour applications mobiles iOS et Android qui offrent une expérience utilisateur fluide et intuitive.',
            'image' => 'https://placehold.co/600x400',
            'price' => 900.00,
            'price_label' => 'À partir de 900€',
            'is_featured' => false,
            'order' => 4,
        ]);

        $mobileFeatures = [
            'Design pour iOS et Android',
            'Interfaces adaptatives',
            'Prototypes interactifs',
            'Optimisation des performances',
        ];

        foreach ($mobileFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $mobileDesign->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }

        // Branding
        $branding = Service::create([
            'title' => 'Branding',
            'slug' => 'branding',
            'description' => 'Création et développement de l\'identité de marque qui vous démarque de la concurrence et résonne avec votre public cible.',
            'image' => 'https://placehold.co/600x400',
            'price' => 1200.00,
            'price_label' => 'À partir de 1200€',
            'is_featured' => true,
            'order' => 5,
        ]);

        $brandingFeatures = [
            'Stratégie de marque',
            'Identité visuelle complète',
            'Guide de style',
            'Positionnement de marque',
        ];

        foreach ($brandingFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $branding->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }

        // Design Print
        $printDesign = Service::create([
            'title' => 'Design Print',
            'slug' => 'print-design',
            'description' => 'Conception de supports imprimés pour votre communication qui captent l\'attention et transmettent efficacement votre message.',
            'image' => 'https://placehold.co/600x400',
            'price' => 400.00,
            'price_label' => 'À partir de 400€',
            'is_featured' => false,
            'order' => 6,
        ]);

        $printFeatures = [
            'Cartes de visite',
            'Brochures et flyers',
            'Affiches et posters',
            'Packaging',
        ];

        foreach ($printFeatures as $index => $feature) {
            ServiceFeature::create([
                'service_id' => $printDesign->id,
                'feature' => $feature,
                'order' => $index + 1,
            ]);
        }
    }
}
