<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import GalleryProper from './GalleryProper.vue';

interface Props {
    albums: Array<any>;
    photos: Array<any>;
    initialCategory?: string;
    selectedAlbumId?: string | null;
    view?: 'albums' | 'photos';
}

const props = defineProps<Props>();
</script>

<template>
    <WebsiteLayout class="min-h-svh">

        <Head title="Gallery" />

        <HeroSection image-url="@images/gallery-hero.jpeg" title="Gallery"
            :subtitle="'Capturing moments of hope \nlearning and community impact.'" />

        <GalleryProper :albums="props.albums" :photos="props.photos" :initial-category="props.initialCategory"
            :selected-album-id="props.selectedAlbumId" :view="props.view" />

        <!-- Rest of your content -->
        <section class="py-16 lg:px-10 bg-gray-50">
            <!-- Your existing featured story section -->
        </section>

        <MissionCtaSection title="Every picture tells a story"
            subtitle="Help us create more stories of hope and empowerment in communities across Ghana." />

        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
