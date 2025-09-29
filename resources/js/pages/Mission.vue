<template>

    <section class="py-16 lg:py-24 bg-background">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">

                <!-- Content Side -->
                <div class="order-2 lg:order-1 space-y-8">
                    <div>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                            About Our Mission
                        </h2>

                        <div class="space-y-6 text-gray-700">
                            <p class="text-lg sm:text-xl leading-relaxed">
                                The Berea Noble Foundation is dedicated to creating lasting change in
                                communities through education, healthcare, and support services. We believe that
                                every child deserves access to quality education and every elder deserves
                                dignity and care in their golden years.
                            </p>

                            <p class="text-lg sm:text-xl leading-relaxed">
                                Through our mobile library initiatives and community programs, we're building
                                bridges to knowledge and fostering hope in underserved communities across the
                                region.
                            </p>
                        </div>
                    </div>

                    <!-- Key Impact Points -->
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 bg-brand rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-background" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Mobile Libraries</h3>
                                <p class="text-gray-600 text-sm">Bringing books and knowledge directly to remote
                                    communities</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 bg-brand rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-background" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Educational Programs</h3>
                                <p class="text-gray-600 text-sm">Comprehensive learning support for children of
                                    all ages</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 bg-brand rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-background" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Healthcare Access</h3>
                                <p class="text-gray-600 text-sm">Essential medical services and health education
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 bg-brand rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-background" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Elder Care</h3>
                                <p class="text-gray-600 text-sm">Support and dignity for our community elders
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action Button -->
                    <div class="pt-4">
                        <button
                            class="inline-flex items-center px-8 py-3 border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold rounded-lg transition-all duration-300 transform hover:scale-105">
                            Read More
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="order-1 lg:order-2 relative">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Mobile library van with children holding books"
                            class="w-full h-[400px] lg:h-[600px] object-cover">

                        <!-- Subtle overlay for better text contrast if needed -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>

                        <!-- Optional: Small info badge -->
                        <div
                            class="absolute bottom-6 left-6 bg-background/95 backdrop-blur-sm rounded-lg px-4 py-2 shadow-lg">
                            <p class="text-sm font-semibold text-gray-900">Mobile Library Initiative</p>
                            <p class="text-xs text-gray-600">Reaching 25+ communities</p>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-brand/10 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-brand/5 rounded-full blur-xl"></div>
                </div>
            </div>
        </div>
    </section>
</template>
