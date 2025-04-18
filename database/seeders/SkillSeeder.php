<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            // Compétences en Design
            [
                'name' => 'Adobe Photoshop',
                'description' => 'Édition d\'images et création graphique',
                'percentage' => 95,
                'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9.85 8.42c-.37-.15-.77-.21-1.18-.2-.26 0-.49 0-.68.01-.2-.01-.34 0-.41.01v3.36c.14.01.27.02.39.02h.53c.39 0 .78-.06 1.15-.18.32-.09.6-.28.82-.53.21-.25.31-.59.31-1.03.01-.31-.07-.62-.23-.89-.17-.26-.41-.46-.7-.57zM19.75.3H4.25C1.9.3 0 2.2 0 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zm-7.4 11.8c-.5.51-1.13.87-1.82 1.05-.74.19-1.5.28-2.27.26-.26 0-.52 0-.78-.01-.22 0-.43-.01-.63-.01v3.35h-2.61V5.79c.65-.04 1.3-.06 1.94-.06.74-.01 1.47.03 2.2.12.58.07 1.14.23 1.67.46.44.2.83.49 1.14.86.3.36.51.77.63 1.22.12.46.18.93.17 1.41.01.68-.14 1.36-.43 1.97-.29.61-.71 1.12-1.21 1.43zm7.33 4.16c-.51.44-1.17.64-1.97.64-.42 0-.83-.08-1.2-.25-.33-.14-.63-.35-.88-.61-.23-.25-.41-.54-.53-.85-.11-.31-.16-.62-.16-.94h1.43c.07.47.25.83.55 1.08.26.23.6.34 1.01.34.38 0 .69-.11.94-.34.23-.23.34-.54.34-.93 0-.29-.08-.54-.23-.74-.17-.2-.38-.36-.62-.49-.25-.14-.55-.27-.9-.4-.35-.11-.71-.24-1.08-.38-.71-.26-1.35-.7-1.89-1.28-.51-.58-.77-1.33-.77-2.26 0-.36.07-.73.22-1.09.15-.37.37-.7.67-.99.31-.29.69-.53 1.13-.7.47-.2.99-.29 1.54-.29.62 0 1.16.11 1.63.34.45.21.84.51 1.17.89.3.36.52.77.67 1.21.13.41.2.83.2 1.26h-1.43c0-.28-.05-.55-.14-.81-.08-.23-.21-.44-.38-.62-.16-.17-.35-.3-.58-.39-.23-.09-.5-.14-.79-.14-.54 0-.95.14-1.22.43-.28.29-.41.65-.41 1.08 0 .24.05.45.16.62.11.17.26.32.44.44.21.14.45.26.72.36.29.11.59.22.91.34.35.12.7.26 1.04.42.35.15.67.34.96.57.29.23.53.52.71.85.2.35.29.77.29 1.26.01.45-.1.86-.3 1.24-.21.38-.49.68-.85.92z"></path></svg>',
                'category' => 'Design',
                'order' => 1,
            ],
            [
                'name' => 'Adobe Illustrator',
                'description' => 'Création de graphiques vectoriels',
                'percentage' => 90,
                'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.75.3H4.25C1.9.3 0 2.2 0 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zM9.13 16.75H6.67l-.58-1.97H3.53l-.6 1.97H.72L3.77 7h2.6l2.76 9.75zm8.65 0h-2.24v-4.31c0-1.4-.49-2.1-1.47-2.1-.57 0-1.05.19-1.44.58-.39.39-.58.86-.58 1.43v4.4H9.81V8.91h2.24v1.32c.71-1.01 1.67-1.51 2.9-1.51.97 0 1.71.3 2.22.9.51.6.77 1.48.77 2.65v4.48zM2.98 13.06h2.43L4.19 9.7l-1.21 3.36zm7.29-8.3c0-.39.14-.72.42-1 .28-.28.62-.42 1-.42.39 0 .72.14 1 .42.28.28.42.62.42 1 0 .39-.14.72-.42 1-.28.28-.62.42-1 .42-.39 0-.72-.14-1-.42-.28-.28-.42-.62-.42-1z"></path></svg>',
                'category' => 'Design',
                'order' => 2,
            ],
            [
                'name' => 'Adobe InDesign',
                'description' => 'Mise en page et publication',
                'percentage' => 85,
                'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.75.3H4.25C1.9.3 0 2.2 0 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zM15.91 16.75h-2.17V7.71h2.17v9.04zm-4.76 0H8.98V7.71h2.17v9.04zm-2.17-10.4H6.81V4.18h2.17v2.17z"></path></svg>',
                'category' => 'Design',
                'order' => 3,
            ],
            [
                'name' => 'Figma',
                'description' => 'Design d\'interface et prototypage',
                'percentage' => 98,
                'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z"></path></svg>',
                'category' => 'Design',
                'order' => 4,
            ],
            
            // Compétences en Branding
            [
                'name' => 'Identité de Marque',
                'description' => 'Création d\'identités visuelles complètes',
                'percentage' => 92,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>',
                'category' => 'Branding',
                'order' => 1,
            ],
            [
                'name' => 'Stratégie de Marque',
                'description' => 'Développement de stratégies de marque efficaces',
                'percentage' => 88,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
                'category' => 'Branding',
                'order' => 2,
            ],
            [
                'name' => 'Logo Design',
                'description' => 'Création de logos mémorables et impactants',
                'percentage' => 95,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>',
                'category' => 'Branding',
                'order' => 3,
            ],
            
            // Compétences en Print
            [
                'name' => 'Mise en Page',
                'description' => 'Création de mises en page efficaces et esthétiques',
                'percentage' => 90,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>',
                'category' => 'Print',
                'order' => 1,
            ],
            [
                'name' => 'Typographie',
                'description' => 'Maîtrise des principes typographiques',
                'percentage' => 93,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>',
                'category' => 'Print',
                'order' => 2,
            ],
            [
                'name' => 'Packaging Design',
                'description' => 'Conception d\'emballages attractifs et fonctionnels',
                'percentage' => 85,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>',
                'category' => 'Print',
                'order' => 3,
            ],
            
            // Compétences en Illustration
            [
                'name' => 'Illustration Digitale',
                'description' => 'Création d\'illustrations numériques',
                'percentage' => 88,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>',
                'category' => 'Illustration',
                'order' => 1,
            ],
            [
                'name' => 'Character Design',
                'description' => 'Conception de personnages expressifs',
                'percentage' => 82,
                'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
                'category' => 'Illustration',
                'order' => 2,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
