<script setup lang="ts">
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import DonationFormSection from './DonationFormSection.vue';
import { Head, usePage } from '@inertiajs/vue3';
const pageUrl = usePage().url;

</script>

<template>
    <WebsiteLayout class="min-h-svh">

          <Head>
            <title>Donate Now - Support Our Mission | Berea Noble Foundation</title>

            <!-- Primary Meta Tags -->
            <meta name="description" content="Make a difference today. Your donation helps provide education, healthcare, and support to underserved communities. Every contribution counts." />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="pageUrl" />
            <meta property="og:title" content="Donate Now - Support Our Mission | Berea Noble Foundation" />
            <meta property="og:description" content="Make a difference today. Your donation helps provide education, healthcare, and support to underserved communities. Every contribution counts." />

            <!-- Twitter -->
            <meta property="twitter:url" :content="pageUrl" />
            <meta property="twitter:title" content="Donate Now - Support Our Mission | Berea Noble Foundation" />
            <meta property="twitter:description" content="Make a difference today. Your donation helps provide education, healthcare, and support to underserved communities. Every contribution counts." />

            <!-- Canonical -->
            <link rel="canonical" :href="pageUrl" />

        </Head>

        <HeroSection
            title="Donate Now"
            :subtitle="'Your support brings knowledge, hope, and care to communities in need.'"
        />

        <DonationFormSection />

        <section class="pb-16 lg:pb-24 px-10 bg-white">
        <div class="container-primary">

            <!-- Header -->
            <div class="text-center mb-16 lg:mb-20">
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 lg:mb-8">
                    Why Donate
                </h2>
                <p class="text-lg lg:text-xl xl:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed lg:whitespace-pre-line">
                    {{ 'Your contributions directly impact communities across Ghana, bringing education, \nhealthcare, and hope to those who need it most.' }}
                </p>
            </div>

            <!-- Impact Statistics Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 xl:gap-16">

                <!-- Books Shared -->
                <div class="impact-stat text-center counter-animate">
                    <div class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-brand mb-4 lg:mb-6">
                        GHS 100
                    </div>
                    <div class="text-base sm:text-lg lg:text-xl font-medium">
                        Provides books for 10 children
                    </div>
                </div>

                <!-- Children Impacted -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.2s;">
                    <div class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-brand mb-4 lg:mb-6">
                        GHS 200
                    </div>
                    <div class="text-base sm:text-lg lg:text-xl font-medium">
                        Supports a community book club for a month
                    </div>
                </div>

                <!-- Communities Served -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.4s;">
                    <div class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-brand mb-4 lg:mb-6">
                        GHS 500
                    </div>
                    <div class="text-base sm:text-lg lg:text-xl font-medium">
                        Funds medical aid for the elderly
                    </div>
                </div>

                <!-- Active Volunteers -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.6s;">
                    <div class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-brand mb-4 lg:mb-6">
                        GHS 1000
                    </div>
                    <div class="text-base sm:text-lg lg:text-xl font-medium">
                        Establishes a new mobile library route
                    </div>
                </div>

            </div>
        </div>

    </section>

        <section class="py-16 lg:py-24 px-10">
            <div class="container-primary text-center">
                <!-- Quote Icon -->
                <div class="mb-10 text-brand flex justify-center">
                    <svg class="size-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><!-- Icon from Lucide by Lucide Contributors - https://github.com/lucide-icons/lucide/blob/main/LICENSE --><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2zM5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg>
                </div>
                <blockquote class="italic text-lg lg:text-2xl text-gray-700">
                    <p>“Because of the mobile library, my children now love reading every evening. They come home excited to share the stories they've discovered, and I can see their curiosity about the world growing every day.”</p>
                    <footer class="mt-2 text-base lg:text-lg font-semibold text-gray-500">
                        — Akosua, Parent in rural Ghana
                    </footer>
                </blockquote>
            </div>
        </section>
        <MissionCtaSection
            title="Every cedi makes a difference"
            :subtitle="'Partner with us today and help transform lives through \neducation and community support.'"
        />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
