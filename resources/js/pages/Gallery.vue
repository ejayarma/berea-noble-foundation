<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import GalleryProper from './GalleryProper.vue';
import { Album, Photo } from '@/types';

const pageUrl = usePage().url;

interface Props {
    photos?: Photo[]
    albums?: Album[]
    categories: Array<any>
    initialCategory?: string
    selectedAlbum?: string | null
    view?: 'albums' | 'photos';
}

const props = defineProps<Props>();
</script>

<template>
    <WebsiteLayout class="min-h-svh">

        <Head>
            <title>Gallery - See Our Impact | Berea Noble Foundation</title>

            <!-- Primary Meta Tags -->
            <meta name="description" content="Explore moments that capture the heart of our mission. See the joy and impact we're creating in communities through our mobile library and programs." />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="pageUrl" />
            <meta property="og:title" content="Gallery - See Our Impact | Berea Noble Foundation" />
            <meta property="og:description" content="Explore moments that capture the heart of our mission. See the joy and impact we're creating in communities through our mobile library and programs." />

            <!-- Twitter -->
            <meta property="twitter:url" :content="pageUrl" />
            <meta property="twitter:title" content="Gallery - See Our Impact | Berea Noble Foundation" />
            <meta property="twitter:description" content="Explore moments that capture the heart of our mission. See the joy and impact we're creating in communities through our mobile library and programs." />

            <!-- Canonical -->
            <link rel="canonical" :href="pageUrl" />

        </Head>

        <HeroSection image-url="@images/gallery-hero.jpeg" title="Gallery"
            :subtitle="'Capturing moments of hope \nlearning and community impact.'" />

        <GalleryProper
            :albums="props.albums"
            :photos="props.photos"
            :categories="props.categories"
            :initial-category="props.initialCategory"
            :selectedAlbumSlug="props.selectedAlbum"
            :view="props.view" />

        <!-- Rest of your content -->
        <section class="py-16 lg:px-10 bg-gray-50">
            <!-- Your existing featured story section -->
        </section>

        <MissionCtaSection title="Every picture tells a story"
            subtitle="Help us create more stories of hope and empowerment in communities across Ghana." />

        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
