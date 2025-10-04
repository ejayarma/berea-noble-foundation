<template>
    <!-- Hero Section -->
    <section class="relative min-h-svh bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="@images/home-hero-bg.jpeg" alt="Children learning in community"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 flex items-center justify-center min-h-svh px-10">
            <div class="container-primary text-center">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-background mb-6 leading-tight">
                    Bringing Knowledge & Hope
                    <br class="hidden sm:block">
                    <span class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl">to Communities</span>
                </h1>

                <p class="text-lg sm:text-xl lg:text-2xl text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Empowering children and supporting the underprivileged through
                    <br class="hidden sm:block">
                    education and care.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button
                        class="bg-brand hover:bg-orange-600 text-background font-semibold px-6 py-3 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg w-full sm:w-auto min-w-[160px]">
                        Donate Now
                    </button>
                    <button
                        class="border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold px-6 py-3 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 w-full sm:w-auto min-w-[160px]">
                        Learn More
                    </button>
                </div>

                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-background" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</template>
