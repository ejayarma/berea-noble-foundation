<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import ImpactSection from './Partials/ImpactSection.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';

</script>

<template>
    <WebsiteLayout class="min-h-svh">
        <Head title="Programs" />
        <HeroSection
                image-url="@images/programs-hero.jpeg"
                title="Our Programs"
                :subtitle="'Creating impact through education, care \nand community empowerment.'"
        />
        <section class="programs-section bg-gray-50 py-16 lg:py-24 lg:px-10">
            <div class="container-primary">
                <!-- Header -->
                <div class="text-center mb-16">
                    <p class="text-prose">
                        At Berea Noble Foundation, our programs are designed to bridge knowledge gaps, uplift
                        communities, and provide essential support for the underserved.
                    </p>

                    <!-- Decorative Line -->
                    <div class="w-full h-0.5 bg-brand mx-auto mt-8"></div>
                </div>

                <!-- Programs Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Knowledge Transfer & Mobile Libraries -->
                    <div class="program-card group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-gray-100">
                            <!-- Image Container with Icon Overlay -->
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="@images/knowledge-transfer.jpeg"
                                    alt="Young person reading a book outdoors - Knowledge Transfer & Mobile Libraries program"
                                    class="size-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 left-4 w-12 h-12 bg-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col items-end h-fullx">
                                <div class="flex-grow">
                                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4 leading-tight">
                                        Knowledge Transfer & Mobile Libraries
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed mb-6">
                                        Delivering books and learning resources to children and communities across rural
                                        areas.
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <!-- <button
                                    class="w-full py-3 px-6 border-2 border-brand text-brand font-medium rounded-lg hover:bg-brand hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2">
                                    Learn More
                                </button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Support for Underprivileged Children -->
                    <div class="program-card group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-gray-100">
                            <!-- Image Container with Icon Overlay -->
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="@images/support-underprivileged.jpeg"
                                    alt="Group of children with volunteers in orange shirts holding school supplies and books"
                                    class="size-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 left-4 w-12 h-12 bg-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5 2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col items-end h-fullx">
                                <div class="flex-grow">
                                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4 leading-tight">
                                        Support for Underprivileged Children
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed mb-6">
                                        Providing essential support and opportunities for children in poor communities
                                        to thrive.
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <!-- <button
                                    class="w-full py-3 px-6 border-2 border-brand text-brand font-medium rounded-lg hover:bg-brand hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2">
                                    Learn More
                                </button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Medical Aid for the Elderly -->
                    <div class="program-card group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-gray-100">
                            <!-- Image Container with Icon Overlay -->
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="@images/medical-aid.jpeg"
                                    alt="Healthcare worker providing medical assistance to elderly community members"
                                    class="size-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 left-4 w-12 h-12 bg-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M11,6H13V11H18V13H13V18H11V13H6V11H11V6Z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col items-end h-fullx">
                                <div class="flex-grow">
                                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4 leading-tight">
                                        Medical Aid for the Elderly
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed mb-6">
                                        Helping provide medical support and healthcare assistance for elderly people in
                                        deprived communities.
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <!-- <button
                                    class="w-full py-3 px-6 border-2 border-brand text-brand font-medium rounded-lg hover:bg-brand hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2">
                                    Learn More
                                </button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Community Book Clubs -->
                    <div class="program-card group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-gray-100">
                            <!-- Image Container with Icon Overlay -->
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="@images/com-book-clubs.jpeg"
                                    alt="Community members gathered under a tree for book club reading session"
                                    class="size-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                                <!-- Icon Overlay -->
                                <div
                                    class="absolute top-4 left-4 w-12 h-12 bg-brand rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col items-end h-fullx">
                                <div class="flex-grow">
                                    <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4 leading-tight">
                                        Community Book Clubs
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed mb-6">
                                        Establishing book clubs and promoting reading culture for all ages within local
                                        communities.
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <!-- <button
                                    class="w-full py-3 px-6 border-2 border-brand text-brand font-medium rounded-lg hover:bg-brand hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2">
                                    Learn More
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <ImpactSection variant="dark" :show-header="false" />

        <section class="py-16 lg:py-24 lg:px-10">
            <div class="container-primary text-center">
                <blockquote class="italic text-lg lg:text-2xl text-gray-700">
                    <p>“Reading has opened doors for our children that were once closed.”</p>
                    <footer class="mt-2 text-base lg:text-lg font-semibold text-gray-500">
                        — Community Leader
                    </footer>
                </blockquote>
            </div>
        </section>

        <MissionCtaSection />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
