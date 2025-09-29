<script setup lang="ts">
import HomeHeroBg from '@images/home-hero-bg.jpeg'
import ProgramsHeroBg from '@images/programs-hero.jpeg'
import AboutUsHeroBg from '@images/about-us-hero.jpeg'
import GalleryHeroBg from '@images/gallery-hero.jpeg'
import DefaultHeroBg from '@images/default-hero.jpeg'

const props = withDefaults(defineProps<{
    title?: string
    subtitle?: string
    imageUrl?: string
    showScrollIndicator?: boolean
}>(), {
    imageUrl: DefaultHeroBg,
    showScrollIndicator: false
});

const heroMap: Record<string, string> = {
    '@images/home-hero-bg.jpeg' : HomeHeroBg,
    '@images/programs-hero.jpeg' : ProgramsHeroBg,
    '@images/about-us-hero.jpeg' : AboutUsHeroBg,
    '@images/gallery-hero.jpeg' : GalleryHeroBg,
    '@images/default-hero.jpeg' : DefaultHeroBg,
};


</script>
<template>
    <!-- Our Impact Section -->
    <section class="relative min-h-svh bg-gray-900 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img :src="heroMap[props.imageUrl] ?? props.imageUrl" alt="Children learning in community"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 flex items-center justify-center min-h-svh px-10">
            <div class="container-primary text-center">

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-background mb-6 leading-tight sm:whitespace-pre-line">
                    {{ props.title }}
                </h1>

                <!-- Subtitle -->
                <p class="text-lg sm:text-xl lg:text-2xl text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed  sm:whitespace-pre-line">
                    {{ props.subtitle }}
                </p>

                <slot></slot>

                <!-- Scroll indicator -->
                <div v-if="props.showScrollIndicator" class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-background" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</template>