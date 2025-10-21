<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import BlogProper from './BlogProper.vue';
import NewsLetterSection from './Partials/NewsLetterSection.vue';
import { Category, BlogPost } from '@/types';

const pageUrl = usePage().url;

interface Props {
    posts?: BlogPost[],
    categories?: Category[],
}

const props = defineProps<Props>();

</script>



<template>
    <WebsiteLayout class="min-h-svh">

        <Head>
            <title>Latest News & Stories - Berea Noble Foundation</title>

            <!-- Primary Meta Tags -->
            <meta name="description" content="Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth." />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="pageUrl" />
            <meta property="og:title" content="Latest News & Stories - Berea Noble Foundation" />
            <meta property="og:description" content="Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth." />

            <!-- Twitter -->
            <meta property="twitter:url" :content="pageUrl" />
            <meta property="twitter:title" content="Latest News & Stories - Berea Noble Foundation" />
            <meta property="twitter:description" content="Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth." />

            <!-- Canonical -->
            <link rel="canonical" :href="pageUrl" />

        </Head>

        <HeroSection title="Blog & Updates" subtitle="Stories of impact, community and hope" />
        <BlogProper :posts="props.posts" :categories="props.categories" />
        <NewsLetterSection />
        <MissionCtaSection title="Be part of the story. Help us create more impact."
            :subtitle="'Every donation, every volunteer hour, and every shared story brings us closer \nto transforming communities across Ghana. Join us in making a lasting difference.'" />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
