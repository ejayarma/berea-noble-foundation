<template>
    <!-- Support for Children Card -->
    <div
        class="bg-background rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
        <!-- Icon -->
        <div class="w-16 h-16 bg-brand rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-background" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg>
        </div>

        <!-- Title -->
        <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
            Support for Children
        </h3>

        <!-- Description -->
        <p class="text-gray-600 leading-relaxed mb-8">
            Comprehensive programs providing educational support, nutrition, and care for children
            in need.
        </p>

        <!-- Learn More Link -->
        <div class="mt-auto">
            <a href="#"
                class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group-hover:translate-x-1 transform transition-transform">
                Learn More
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>

            <!-- Orange underline -->
            <div class="w-full h-1 bg-brand rounded-full mt-4"></div>
        </div>
    </div>
</template>
