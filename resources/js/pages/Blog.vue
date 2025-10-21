<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import BlogProper from './BlogProper.vue';
import NewsLetterSection from './Partials/NewsLetterSection.vue';
import { Category, BlogPost } from '@/types';

interface Props {
    posts?: BlogPost[],
    categories?: Category[],
}

const props = defineProps<Props>();

</script>



<template>
    <WebsiteLayout class="min-h-svh">

        <Head title="Blog" />

        <HeroSection title="Blog & Updates" subtitle="Stories of impact, community and hope" />
        <BlogProper :posts="props.posts" :categories="props.categories" />
        <NewsLetterSection />
        <MissionCtaSection title="Be part of the story. Help us create more impact."
            :subtitle="'Every donation, every volunteer hour, and every shared story brings us closer \nto transforming communities across Ghana. Join us in making a lasting difference.'" />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
