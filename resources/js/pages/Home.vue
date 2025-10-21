<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import ImpactSection from './Partials/ImpactSection.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import { Link } from '@inertiajs/vue3';
const { app } = usePage().props;
const pageUrl = usePage().url;


</script>

<template>
    <WebsiteLayout class="min-h-svh">
        
        <div>
            <HeroSection
                show-scroll-indicator
                image-url="@images/home-hero-bg.jpeg"
                :title="'Bringing Knowledge & Hope\nto Communities'"
                :subtitle="'Empowering children and supporting the underprivileged through\neducation and care.'"
            >
            <!-- Call to Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <Link
                        href="/donate"
                        class="bg-brand hover:bg-orange-600 text-background font-semibold px-6 py-3 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg w-full sm:w-auto min-w-[160px]">
                        Donate Now
                    </Link>
                    <Link
                        href="/about-us"
                        class="border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold px-6 py-3 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 w-full sm:w-auto min-w-[160px]">
                        Learn More
                    </Link>
                </div>

            </HeroSection>

            <section class="mt-30 bg-gradient-to-r from-orange-50 to-background">
                <div class="w-full max-w-7xl mx-auto">
                    <div class="relative grid lg:grid-cols-2 min-h-[600px]">

                        <!-- Left Content Side - Exact matching -->
                        <div class="relative z-10 bg-brand/90 px-8 sm:px-12 lg:px-16 py-16 lg:py-20 flex flex-col justify-center">
                            <div class="absolute inset-0 bg-white/60"></div>

                            <div class="z-5 lg:pl-3.5">
                                <!-- Heading - exact typography -->
                                <h2
                                    class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-8 lg:mb-12 leading-[1.1] tracking-tight">
                                    About Our Mission
                                </h2>

                                <!-- First Paragraph - exact spacing and sizing -->
                                <p class="text-prose mb-6 lg:mb-8">
                                    The Berea Noble Foundation is dedicated to creating lasting change in communities
                                    through education, healthcare, and support services. We believe that every child
                                    deserves access to quality education and every elder deserves dignity and care in their
                                    golden years.
                                </p>

                                <!-- Second Paragraph - exact spacing -->
                                <p class="text-prose mb-10 lg:mb-12">
                                    Through our mobile library initiatives and community programs, we're building bridges to
                                    knowledge and fostering hope in underserved communities across the region.
                                </p>

                                <!-- Read More Button - exact styling from image -->
                                <div>
                                    <button
                                        class="inline-flex items-center justify-center px-8 py-3.5 border-2 border-brand text-brand font-semibold text-lg rounded-lg hover:bg-brand hover:text-background transition-all duration-300 min-w-[160px]">
                                        Read More
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Right Image Side - exact proportions -->
                        <div class="absolute inset-0 bg-background overflow-hidden">
                            <img src="@images/mission-hero-side.png"
                                alt="Berea Noble Foundation mobile library van with excited children holding books"
                                class="w-full h-full object-cover object-center">

                            <!-- Subtle gradient overlay to match the warm lighting in your image -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-amber-900/5">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-16 lg:py-24 bg-white lg:px-10">
                <div class="container-primary">

                    <!-- Header Section -->
                    <div class="text-center mb-16 lg:mb-20">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 lg:mb-8">
                            What We Do
                        </h2>
                        <p class="text-prose-alt">
                            Our comprehensive programs address the diverse needs of communities through education,
                            healthcare, and social support.
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-6 lg:gap-8">

                        <!-- Knowledge Transfer Card -->
                        <div
                            class="relative text-center mt-4 bg-background rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">

                            <!-- Icon -->
                            <div class="absolute -top-8 left-0 w-full flex justify-center">
                                <div class="size-16 bg-brand text-background rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14"><!-- Icon from Streamline by Streamline - https://creativecommons.org/licenses/by/4.0/ --><path fill="currentColor" fill-rule="evenodd" d="M6.375 1.653C5.386 1.099 3.536.42 1.496.179C.674.082 0 .76 0 1.588v8c0 .829.677 1.489 1.492 1.637c1.84.334 3.371 1.216 4.348 1.914q.248.175.535.266zm1.25 11.752q.287-.09.534-.265c.977-.698 2.508-1.581 4.349-1.915c.815-.148 1.492-.808 1.492-1.637v-8C14 .76 13.326.082 12.504.18c-2.04.242-3.89.92-4.879 1.474v11.752Z" clip-rule="evenodd"/></svg>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                                Knowledge Transfer
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 leading-relaxed mb-8">
                                Mobile libraries and book distribution programs bringing education directly to
                                communities.
                            </p>

                            <!-- Learn More Link -->
                            <div class="mt-auto">
                                <Link href="/about-us"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 duration-200 group-hover:translate-x-1 transform transition-transform">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </Link>

                                <!-- Orange underline -->
                                <div class="w-full h-1 bg-brand rounded-full mt-4"></div>
                            </div>
                        </div>

                        <!-- Support for Children Card -->
                        <div
                            class="relative text-center mt-4 bg-background rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
                            <!-- Icon -->
                            <div class="absolute -top-8 left-0 w-full flex justify-center">
                                <div class="size-16 bg-brand rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-background" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                </div>
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
                                <Link href="/about-us"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group-hover:translate-x-1 transform transition-transform">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </Link>

                                <!-- Orange underline -->
                                <div class="w-full h-1 bg-brand rounded-full mt-4"></div>
                            </div>
                        </div>

                        <!-- Medical Aid for Elderly Card -->
                        <div
                            class="relative text-center mt-4 bg-background rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
                            <!-- Icon -->
                            <div class="absolute -top-8 left-0 w-full flex justify-center">
                                <div class="size-16 bg-brand text-background rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE --><path fill="currentColor" d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18t.713-.288T13 17v-2h2q.425 0 .713-.288T16 14t-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10t-.712.288T11 11v2H9q-.425 0-.712.288T8 14t.288.713T9 15z"/></svg>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                                Medical Aid for Elderly
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 leading-relaxed mb-8">
                                Healthcare services and medical assistance for elderly community members.
                            </p>

                            <!-- Learn More Link -->
                            <div class="mt-auto">
                                <Link href="/about-us"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group-hover:translate-x-1 transform transition-transform">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </Link>

                                <!-- Orange underline -->
                                <div class="w-full h-1 bg-brand rounded-full mt-4"></div>
                            </div>
                        </div>

                        <!-- Community Book Clubs Card -->
                        <div
                            class="relative text-center mt-4 bg-background rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
                            <!-- Icon -->
                            <div class="absolute -top-8 left-0 w-full flex justify-center">
                                <div class="size-16 bg-brand text-background rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Google Material Icons by Material Design Authors - https://github.com/material-icons/material-icons/blob/master/LICENSE --><path fill="currentColor" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5S5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V18c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05c.02.01.03.03.04.04c1.14.83 1.93 1.94 1.93 3.41V18c0 .35-.07.69-.18 1H22c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5"/></svg>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                                Community Book Clubs
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 leading-relaxed mb-8">
                                Building literacy and community connections through reading groups and educational
                                workshops.
                            </p>

                            <!-- Learn More Link -->
                            <div class="mt-auto">
                                <Link href="/about-us"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group-hover:translate-x-1 transform transition-transform">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </Link>

                                <!-- Orange underline -->
                                <div class="w-full h-1 bg-brand rounded-full mt-4"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <ImpactSection />

            <MissionCtaSection/>

            <!-- Gallery SECTION -->

            <section class="py-16 lg:py-24 bg-background lg:px-10">
                <div class="container-primary">

                    <!-- Header -->
                    <div class="text-center mb-12 lg:mb-16">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 lg:mb-8">
                            Gallery
                        </h2>
                        <p class="text-lg lg:text-xl xl:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                            Moments that capture the heart of our mission - see the joy and impact we're creating
                            together in communities.
                        </p>
                    </div>

                    <!-- Gallery Grid -->
                    <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mb-12 lg:mb-16">

                        <!-- Gallery Item 1 -->
                        <div
                            class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02]">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="@images/reading-session.png"
                                    alt="Reading session with local children under a tree"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>

                            <!-- Overlay with Caption -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end">
                                <div class="p-6 lg:p-8 text-background">
                                    <h3 class="text-lg lg:text-xl font-semibold mb-2">
                                        Reading session with local children
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 2 -->
                        <div
                            class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02]">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="@images/mobile-van.png"
                                    alt="Mobile library van reaching rural communities"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>

                            <!-- Overlay with Caption -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end">
                                <div class="p-6 lg:p-8 text-background">
                                    <h3 class="text-lg lg:text-xl font-semibold mb-2">
                                        Our mobile library reaching rural communities
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 3 -->
                        <div
                            class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02]">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="@images/book-club.png"
                                    alt="Community book club meeting"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>

                            <!-- Overlay with Caption -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end">
                                <div class="p-6 lg:p-8 text-background">
                                    <h3 class="text-lg lg:text-xl font-semibold mb-2">
                                        Community book club meeting
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- View Full Gallery Button -->
                    <div class="text-center">
                        <Link href="/gallery" variant="button"
                            class="inline-flex items-center justify-center px-8 py-4 border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold text-lg rounded-xl transition-all duration-300 transform hover:scale-105 min-w-[200px]">
                            View Full Gallery
                        </Link>
                    </div>

                </div>
            </section>


            <!-- BLOG SECTION -->
            <section class="py-16 lg:py-24 bg-gray-50 lg:px-10">
                <div class="container-primary">

                    <!-- Header -->
                    <div class="text-center mb-12 lg:mb-16">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 lg:mb-8">
                            Latest News & Stories
                        </h2>
                        <p class="text-lg lg:text-xl xl:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                            Stay updated with our latest activities, success stories, and community impact.
                        </p>
                    </div>

                    <!-- News Cards Grid -->
                    <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mb-12 lg:mb-16">

                        <!-- News Card 1 - Education -->
                        <article
                            class="bg-background rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">

                            <!-- Image with Category Badge -->
                            <div class="relative overflow-hidden">
                                <img src="@images/expand-library.jpg"
                                    alt="Library shelves with books"
                                    class="w-full h-48 lg:h-56 object-cover hover:scale-105 transition-transform duration-500">

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-brand text-background px-3 py-1 rounded-full text-sm font-semibold">
                                        Education
                                    </span>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 lg:p-8">
                                <!-- Date -->
                                <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    September 20, 2025
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4 leading-tight">
                                    Expanding Our Mobile Library Program
                                </h3>

                                <!-- Excerpt -->
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Learn how we're reaching more communities with our innovative mobile library
                                    initiative.
                                </p>

                                <!-- Read More Link -->
                                <Link href="/about-us"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </Link>
                            </div>
                        </article>

                        <!-- News Card 2 - Stories -->
                        <article
                            class="bg-background rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">

                            <!-- Image with Category Badge -->
                            <div class="relative overflow-hidden">
                                <img src="@images/community-story.png"
                                    alt="Community gathering with mobile library"
                                    class="w-full h-48 lg:h-56 object-cover hover:scale-105 transition-transform duration-500">

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-brand text-background px-3 py-1 rounded-full text-sm font-semibold">
                                        Stories
                                    </span>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 lg:p-8">
                                <!-- Date -->
                                <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    September 20, 2025
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4 leading-tight">
                                    Success Stories from Our Community
                                </h3>

                                <!-- Excerpt -->
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Inspiring stories of transformation and growth from the communities we serve.
                                </p>

                                <!-- Read More Link -->
                                <a href="#"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <!-- News Card 3 - Events -->
                        <article
                            class="bg-background rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">

                            <!-- Image with Category Badge -->
                            <div class="relative overflow-hidden">
                                <img src="@images/volunteer-story.png"
                                    alt="Volunteers at mobile library event"
                                    class="w-full h-48 lg:h-56 object-cover hover:scale-105 transition-transform duration-500">

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-brand text-background px-3 py-1 rounded-full text-sm font-semibold">
                                        Events
                                    </span>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 lg:p-8">
                                <!-- Date -->
                                <div class="flex items-center text-gray-500 text-sm mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    September 20, 2025
                                </div>

                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4 leading-tight">
                                    Volunteer Spotlight: Making a Difference
                                </h3>

                                <!-- Excerpt -->
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Meet the dedicated volunteers who make our mission possible every day.
                                </p>

                                <!-- Read More Link -->
                                <a href="#"
                                    class="inline-flex items-center text-brand font-semibold hover:text-orange-600 transition-colors duration-200 group">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                    </div>

                    <!-- View All Posts Button -->
                    <div class="text-center">
                        <Link
                            href="/blog"
                            class="inline-flex items-center justify-center px-8 py-4 border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold text-lg rounded-xl transition-all duration-300 transform hover:scale-105 min-w-[200px]">
                            View All Posts
                        </Link>
                    </div>

                </div>
            </section>

        </div>
        <WebsiteFooter />
    </WebsiteLayout>
</template>
