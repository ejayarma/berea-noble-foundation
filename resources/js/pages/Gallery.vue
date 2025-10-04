<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import GalleryProper from './GalleryProper.vue';

</script>

<template>
    <WebsiteLayout class="min-h-svh">
        <Head title="Gallery" />
        <HeroSection image-url="@images/gallery-hero.jpeg"
            title="Gallery"
            :subtitle="'Capturing moments of hope \nlearning and community impact.'"
        />

        <GalleryProper />

        <!-- Our Story Section -->
        <section class="py-16 lg:px-10 bg-gray-50">
            <div class="container-primary">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - Content -->
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">Featured Story</h2>

                        <div class=" text-gray-700 space-y-6 mb-8">
                            <p class="text-prose mb-6">
                                Founded to empower children and underserved communities, Berea Noble Foundation provides
                                educational resources, mobile libraries, medical support, and community programs that
                                address the most pressing needs of vulnerable populations.
                            </p>
                        </div>

                        <!-- Quote -->
                        <blockquote class="border-l-4 border-brand/90 pl-6 py-2 mb-8">
                            <p class="text-xl italic text-brand font-medium">
                                "Our mobile library is bringing books to over 200 children across 12 villages, creating
                                opportunities for learning that never existed before."
                            </p>
                        </blockquote>

                        <div class="flex justify-between gap-6 flex-col md:flex-row my-10">
                            <div class="inline-grid place-items-center text-center">
                                <div class="font-bold text-brand text-xl sm:text-2xl lg:text-3xl xl:text-4xl">1000+</div>
                                <div class="text-lg sm:text-xl lg:text-2xl font-medium text-gray-700">Books shared</div>
                            </div>
                            <div class="inline-grid place-items-center text-center">
                                <div class="font-bold text-brand text-xl sm:text-2xl lg:text-3xl xl:text-4xl">500</div>
                                <div class="text-lg sm:text-xl lg:text-2xl font-medium text-gray-700">Children Impacted</div>
                            </div>
                            <div class="inline-grid place-items-center text-center">
                                <div class="font-bold text-brand text-xl sm:text-2xl lg:text-3xl xl:text-4xl">50+</div>
                                <div class="text-lg sm:text-xl lg:text-2xl font-medium text-gray-700">Communities served</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="@images/our-story.jpeg"
                                alt="Berea Noble Foundation team members in orange shirts working with children and community members in an outdoor setting with palm trees"
                                class="w-full h-full object-cover" />
                        </div>

                        <!-- Optional: Add a decorative element -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-500 rounded-full opacity-20 -z-10">
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-blue-500 rounded-full opacity-20 -z-10">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <MissionCtaSection
            title="Every picture tells a story"
            subtitle="Help us create more stories of hope and empowerment in communities across Ghana."
        />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
