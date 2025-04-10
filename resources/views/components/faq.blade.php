<section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-black text-center mb-12">Des Réponses Claires à Vos Questions,<br>Pour un Parcours en Toute Confiance</h2>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Comment se déroule notre collaboration ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Notre processus inclut la découverte, l'analyse, le développement, les tests et le déploiement. Nous travaillons en étroite collaboration à chaque étape.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Quel forfait est le plus adapté à mon projet ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Cela dépend de l'envergure et de la complexité de votre projet. Je serai ravi de discuter de vos besoins spécifiques et de recommander le forfait le plus approprié lors de notre consultation initiale.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Puis-je apporter des modifications après la livraison finale ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Oui, selon votre forfait. Les forfaits Professionnel et Entreprise incluent des options de révision après la livraison. Pour le forfait Essentiel, des révisions supplémentaires peuvent être arrangées à un tarif horaire.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Qu'est-ce qui est inclus dans le service de prototypage ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Mon service de prototypage comprend la création de maquettes interactives qui simulent l'expérience utilisateur de votre produit. Cela aide à visualiser le flux et la fonctionnalité avant le début du développement.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Combien de temps faut-il pour réaliser mon projet ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Les délais varient selon l'ampleur et la complexité du projet. Un site web simple peut prendre 2-3 semaines, tandis qu'une application complète pourrait nécessiter 1-2 mois. Je fournirai un calendrier précis lors de notre consultation initiale.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 6 -->
                    <div class="border border-gray-200 rounded-lg" x-data="{ open: false }">
                        <button @click="open = !open" class="flex justify-between items-center w-full p-4 text-left">
                            <span class="font-medium text-black">Quels formats recevrai-je pour les livrables finaux ?</span>
                            <svg class="w-5 h-5 text-brand-green" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" class="p-4 pt-0 border-t border-gray-200">
                            <p class="text-gray-600">Pour les forfaits Professionnel et Entreprise, vous recevrez tous les fichiers sources ainsi que les ressources exportées dans des formats adaptés au développement (PNG, SVG, etc.). Le forfait Essentiel inclut uniquement les ressources exportées.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>