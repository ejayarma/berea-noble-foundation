<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import NewsLetterSection from './Partials/NewsLetterSection.vue';

const page = usePage();

interface Author {
  name: string;
  avatar?: string;
}

interface Post {
  id: number;
  title: string;
  slug: string;
  category: string;
  excerpt: string;
  content: string;
  image: string;
  published_at: string;
  author: Author;
  reading_time: number;
}

interface RelatedPost {
  id: number;
  title: string;
  slug: string;
  category: string;
  image: string;
  published_at: string;
}

interface Props {
  post: Post;
  relatedPosts?: RelatedPost[];
}

defineProps<Props>();

const formatDate = (date: string) => {
  return new Date(date).toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
};

const getCategoryColor = (category: string) => {
  const colors: Record<string, string> = {
    Education: 'bg-orange-500',
    Community: 'bg-blue-500',
    'Medical Support': 'bg-green-500',
    Stories: 'bg-purple-500',
    Events: 'bg-pink-500'
  };
  return colors[category] || 'bg-gray-500';
};

</script>

<template>
    <WebsiteLayout class="min-h-svh">
        <Head>
            <title>{{ `${post.title}` }} - Blog | Berea Noble Foundation</title>

            <!-- Primary Meta Tags -->
            <meta name="description" :content="post.excerpt || 'Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth.'" />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="page.url" />
            <meta property="og:title" :content="`${post.title} - Blog | Berea Noble Foundation`" />
            <meta property="og:description" :content="post.excerpt || 'Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth.'" />

            <!-- Twitter -->
            <meta property="twitter:url" :content="page.url" />
            <meta property="twitter:title" :content="`${post.title} - Blog | Berea Noble Foundation`" />
            <meta property="twitter:description" :content="post.excerpt || 'Stay updated with our latest activities, success stories, and community impact. Read inspiring stories of transformation and growth.'" />

            <!-- Canonical -->
            <link rel="canonical" :href="page.url" />

        </Head>

        <!-- Hero Section -->
        <section class="relative h-[400px] md:h-[500px] overflow-hidden">
            <img
                :src="post.image"
                :alt="post.title"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent" />

            <div class="absolute bottom-0 left-0 right-0 px-4 py-8 md:py-12">
                <div class="max-w-4xl mx-auto">
                    <span
                        :class="getCategoryColor(post.category)"
                        class="inline-block px-3 md:px-4 py-1 md:py-1.5 text-white text-xs md:text-sm font-medium rounded-full mb-3 md:mb-4"
                    >
                        {{ post.category }}
                    </span>
                    <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        {{ post.title }}
                    </h1>
                    <div class="flex flex-wrap items-center gap-3 md:gap-6 text-white/90 text-xs md:text-sm">
                        <div class="flex items-center gap-2">
                            <div v-if="post.author.avatar" class="w-8 h-8 md:w-10 md:h-10 rounded-full overflow-hidden">
                                <img :src="post.author.avatar" :alt="post.author.name" class="w-full h-full object-cover" />
                            </div>
                            <div v-else class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-orange-500 flex items-center justify-center text-white font-semibold text-sm md:text-base">
                                {{ post.author.name.charAt(0) }}
                            </div>
                            <span class="font-medium">{{ post.author.name }}</span>
                        </div>
                        <span>{{ formatDate(post.published_at) }}</span>
                        <span>{{ post.reading_time }}</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <article class="py-8 md:py-16 lg:px-10">
            <div class="container-primary">
                <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none prose-headings:font-bold prose-headings:text-gray-900 prose-p:text-gray-700 prose-a:text-orange-500 hover:prose-a:text-orange-600 prose-img:rounded-lg prose-img:shadow-lg" v-html="post.content" />
            </div>
        </article>

        <!-- Share Section -->
        <section class="max-w-4xl mx-auto px-4 py-6 md:py-8 border-t border-gray-200">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900">Share this story</h3>
                <div class="flex gap-2 md:gap-3">
                <a
                    :href="`https://twitter.com/intent/tweet?url=${encodeURIComponent(page.url)}&text=${encodeURIComponent(post.title)}`"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-orange-500 hover:text-white transition-colors"
                >
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a
                    :href="`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(page.url)}`"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-orange-500 hover:text-white transition-colors"
                >
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a
                    :href="`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(page.url)}&title=${encodeURIComponent(post.title)}`"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-orange-500 hover:text-white transition-colors"
                >
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                </div>
            </div>
        </section>

        <!-- Related Posts -->
        <section v-if="relatedPosts && relatedPosts.length > 0" class="bg-gray-50 py-8 md:py-16">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-8">Related Stories</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                <Link
                    v-for="relatedPost in relatedPosts"
                    :key="relatedPost.id"
                    :href="`/blog/${relatedPost.slug}`"
                    class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow"
                >
                    <div class="relative h-40 md:h-48 overflow-hidden">
                    <span
                        :class="getCategoryColor(relatedPost.category)"
                        class="absolute top-2 left-2 md:top-3 md:left-3 z-10 px-2 md:px-3 py-0.5 md:py-1 text-white text-xs font-medium rounded-full"
                    >
                        {{ relatedPost.category }}
                    </span>
                    <img
                        :src="relatedPost.image"
                        :alt="relatedPost.title"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                    </div>
                    <div class="p-4 md:p-5">
                    <p class="text-xs md:text-sm text-gray-500 mb-2">{{ formatDate(relatedPost.published_at) }}</p>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 group-hover:text-orange-500 transition-colors line-clamp-2">
                        {{ relatedPost.title }}
                    </h3>
                    </div>
                </Link>
                </div>
            </div>
        </section>


        <NewsLetterSection />
        <MissionCtaSection
            title="Be part of the story. Help us create more impact."
            :subtitle="'Every donation, every volunteer hour, and every shared story brings us closer \nto transforming communities across Ghana. Join us in making a lasting difference.'"
        />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
