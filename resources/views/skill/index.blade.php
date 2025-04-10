@extends('layouts.dark')

@section('content')
    <!-- Navigation -->
    <x-header />

    <!-- Hero Section -->
    <section class="px-6 md:px-12 py-16 md:py-24 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Design with Empathy,<br>
                Collaborate with Purpose,<br>
                <span class="text-neonGreen">Innovate Together</span>
            </h1>
            <p class="text-grayText mb-8 max-w-lg">
                Transforming ideas into impactful designs that connect with your audience and drive results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('service.quote') }}" class="bg-neonGreen text-black px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all inline-block text-center">
                    Commencer un projet
                </a>
                <a href="#capabilities" class="border border-white/20 px-6 py-3 rounded-full font-medium hover:border-neonGreen hover:text-neonGreen transition-all inline-block text-center">
                    Voir mes compétences
                </a>
            </div>
        </div>
        
        <div class="md:w-1/2 relative">
            <div class="bg-darkCard rounded-xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                     alt="Designer" class="w-full h-80 object-cover">
                <div class="absolute top-0 right-0 w-1/3 h-full bg-neonGreen/20"></div>
            </div>
            <div class="absolute -bottom-4 -right-4 bg-neonGreen w-24 h-24 rounded-xl"></div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="px-6 md:px-12 py-16 bg-black/30">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Expertise in Design, Innovation, <br>Exceptional Design for Every Need</h2>
            <p class="text-grayText">Delivering creative solutions that transform your vision into reality</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service Category 1 -->
            <div class="bg-darkCard rounded-xl p-6 border-t-2 border-neonGreen">
                <div class="w-12 h-12 rounded-full bg-neonGreen/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Effective Communication</h3>
                <p class="text-grayText">
                    Clear and consistent communication throughout the design process ensures that your vision is understood and executed with precision.
                </p>
            </div>

            <!-- Service Category 2 -->
            <div class="bg-darkCard rounded-xl p-6 border-t-2 border-neonGreen">
                <div class="w-12 h-12 rounded-full bg-neonGreen/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Collaborative Mindset</h3>
                <p class="text-grayText">
                    Working closely with you as a partner to ensure that your goals are met and your vision is brought to life through collaborative design.
                </p>
            </div>

            <!-- Service Category 3 -->
            <div class="bg-darkCard rounded-xl p-6 border-t-2 border-neonGreen">
                <div class="w-12 h-12 rounded-full bg-neonGreen/20 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Empathy and User-Centered Thinking</h3>
                <p class="text-grayText">
                    Designing with the end-user in mind, creating intuitive and engaging experiences that resonate with your target audience.
                </p>
            </div>
        </div>
    </section>

    <!-- Capabilities Section -->
    <section id="capabilities" class="px-6 md:px-12 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Showcasing Design Excellence</h2>
            <p class="text-xl">Visualize Our Core Capabilities</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- Capability 1 -->
            <div class="bg-neonGreen rounded-xl p-4 text-center text-black">
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                </div>
                <h3 class="font-bold mb-1">Digital UX/UI</h3>
                <p class="text-sm">95%</p>
            </div>

            <!-- Capability 2 -->
            <div class="bg-neonGreen rounded-xl p-4 text-center text-black">
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                    </svg>
                </div>
                <h3 class="font-bold mb-1">Adobe XD</h3>
                <p class="text-sm">92%</p>
            </div>

            <!-- Capability 3 -->
            <div class="bg-neonGreen rounded-xl p-4 text-center text-black">
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="font-bold mb-1">Sketch</h3>
                <p class="text-sm">90%</p>
            </div>

            <!-- Capability 4 -->
            <div class="bg-neonGreen rounded-xl p-4 text-center text-black">
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold mb-1">Photoshop</h3>
                <p class="text-sm">95%</p>
            </div>

            <!-- Capability 5 -->
            <div class="bg-neonGreen rounded-xl p-4 text-center text-black">
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="font-bold mb-1">Figma</h3>
                <p class="text-sm">98%</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="px-6 md:px-12 py-16 bg-black/30">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Design with Empathy, Collaborate with Purpose, Innovate Together</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Skill Category 1 -->
            <div>
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 rounded-full bg-neonGreen flex items-center justify-center mr-3">
                        <span class="text-black font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold">UX/UI Design</h3>
                </div>
                <div class="h-1 w-full bg-darkCard mb-4">
                    <div class="h-1 bg-neonGreen" style="width: 95%"></div>
                </div>
                <p class="text-grayText mb-8">
                    Creating intuitive and engaging user experiences that drive engagement and conversion.
                </p>

                <!-- Skill 2 -->
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 rounded-full bg-neonGreen flex items-center justify-center mr-3">
                        <span class="text-black font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold">Visual Design</h3>
                </div>
                <div class="h-1 w-full bg-darkCard mb-4">
                    <div class="h-1 bg-neonGreen" style="width: 92%"></div>
                </div>
                <p class="text-grayText mb-8">
                    Crafting visually stunning designs that capture attention and communicate your brand message.
                </p>
            </div>

            <!-- Skill Category 2 -->
            <div>
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 rounded-full bg-neonGreen flex items-center justify-center mr-3">
                        <span class="text-black font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold">Prototyping & Wireframing</h3>
                </div>
                <div class="h-1 w-full bg-darkCard mb-4">
                    <div class="h-1 bg-neonGreen" style="width: 90%"></div>
                </div>
                <p class="text-grayText mb-8">
                    Building interactive prototypes that bring your ideas to life and facilitate user testing.
                </p>

                <!-- Skill 4 -->
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 rounded-full bg-neonGreen flex items-center justify-center mr-3">
                        <span class="text-black font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold">Interaction & Communication</h3>
                </div>
                <div class="h-1 w-full bg-darkCard mb-4">
                    <div class="h-1 bg-neonGreen" style="width: 88%"></div>
                </div>
                <p class="text-grayText mb-8">
                    Facilitating effective communication and collaboration throughout the design process.
                </p>
            </div>

            <!-- Skill Category 3 (Image) -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                     alt="Designer working" class="w-full h-full object-cover rounded-xl">
                <div class="absolute inset-0 bg-gradient-to-t from-darkBg/80 to-transparent rounded-xl"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <h3 class="text-xl font-bold mb-2">Transforming Ideas into Reality</h3>
                    <p class="text-sm text-grayText">
                        With a focus on user-centered design and a collaborative approach, I help bring your vision to life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="px-6 md:px-12 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Clear Answers to your Questions, Ensuring a</h2>
            <p class="text-xl">Smooth Design Journey</p>
        </div>

        <div class="max-w-3xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="border-b border-darkCard py-6" x-data="{ open: false }">
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-medium">1. What is the process for working with you?</h3>
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                         :class="{'rotate-180': open}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="mt-4 text-grayText" x-show="open" x-collapse>
                    <p>The process begins with an initial consultation where we discuss your project goals. I then provide design concepts, followed by revisions based on your feedback. Once the designs are approved, I deliver the final assets for your project.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border-b border-darkCard py-6" x-data="{ open: false }">
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-medium">2. How do I know which plan is right for my project?</h3>
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         :class="{'rotate-180': open}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="mt-4 text-grayText" x-show="open" x-collapse>
                    <p>During our initial consultation, we'll discuss your project requirements, timeline, and budget. Based on this information, I'll recommend the most suitable plan for your needs. You can always upgrade or adjust your plan as your project evolves.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border-b border-darkCard py-6" x-data="{ open: false }">
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-medium">3. Can I make changes to the design after the final delivery?</h3>
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         :class="{'rotate-180': open}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="mt-4 text-grayText" x-show="open" x-collapse>
                    <p>Yes, I offer a revision period after final delivery. Minor adjustments are included in your package. For more significant changes, we can discuss additional revisions at a reasonable rate. I'm committed to ensuring you're completely satisfied with the final product.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border-b border-darkCard py-6" x-data="{ open: false }">
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-medium">4. What's included in the prototyping service?</h3>
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         :class="{'rotate-180': open}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="mt-4 text-grayText" x-show="open" x-collapse>
                    <p>The prototyping service includes creating interactive mockups of your design that simulate the user experience. This allows you to test functionality and user flow before development. Prototypes can be created in various fidelity levels depending on your needs, from simple wireframes to fully interactive high-fidelity prototypes.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border-b border-darkCard py-6" x-data="{ open: false }">
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-medium">5. How long will it take to complete my project?</h3>
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         :class="{'rotate-180': open}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="mt-4 text-grayText" x-show="open" x-collapse>
                    <p>Project timelines vary depending on the scope and complexity. A simple website design might take 2-3 weeks, while a comprehensive brand identity could take 4-6 weeks. During our initial consultation, I'll provide a detailed timeline based on your specific project requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-6 md:px-12 py-16 bg-darkCard rounded-xl mx-6 md:mx-12 mb-16 relative overflow-hidden">
        <div class="relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Transform Your Ideas into Reality
            </h2>
            <p class="text-grayText mb-8 max-w-2xl mx-auto">
                Ready to bring your vision to life? Let's collaborate and create something extraordinary together.
            </p>
            <a href="{{ route('service.quote') }}" class="bg-neonGreen text-black px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all inline-block">
                Let's Work Together
            </a>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-neonGreen/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-neonGreen/5 rounded-full blur-3xl"></div>
    </section>

    <!-- Footer -->
    <x-footer />
@endsection
