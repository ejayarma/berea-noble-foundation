<script setup lang="ts">
import { ref, computed } from 'vue'
import { Link } from '@inertiajs/vue3'
import { BlogPost } from '@/types';

interface Props {
    posts?: BlogPost[]
}

const props = withDefaults(defineProps<Props>(), {
    posts: () => [
        {
            id: 1,
            category: 'Education',
            image: 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=800&q=80',
            date: '2025-09-20',
            title: 'Expanding Our Mobile Library Program',
            description: 'Learn how we\'re reaching more communities with our innovative mobile library initiative.',
            slug: 'expanding-mobile-library-program'
        },
        {
            id: 2,
            category: 'Stories',
            image: 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&q=80',
            date: '2025-09-20',
            title: 'Success Stories from Our Community',
            description: 'Inspiring stories of transformation and growth from the communities we serve.',
            slug: 'success-stories-community'
        },
        {
            id: 3,
            category: 'Events',
            image: 'https://images.unsplash.com/photo-1544717305-2782549b5136?w=800&q=80',
            date: '2025-09-20',
            title: 'Volunteer Spotlight: Making a Difference',
            description: 'Meet the dedicated volunteers who make our mission possible every day.',
            slug: 'volunteer-spotlight-making-difference'
        },
        {
            id: 4,
            category: 'Education',
            image: 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&q=80',
            date: '2025-09-20',
            title: 'Expanding Our Mobile Library Program',
            description: 'Learn how we\'re reaching more communities with our innovative mobile library initiative.',
            slug: 'expanding-mobile-library-program-2'
        },
        {
            id: 5,
            category: 'Stories',
            image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&q=80',
            date: '2025-09-20',
            title: 'Success Stories from Our Community',
            description: 'Inspiring stories of transformation and growth from the communities we serve.',
            slug: 'success-stories-community-2'
        },
        {
            id: 6,
            category: 'Events',
            image: 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
            date: '2025-09-20',
            title: 'Volunteer Spotlight: Making a Difference',
            description: 'Meet the dedicated volunteers who make our mission possible every day.',
            slug: 'volunteer-spotlight-making-difference-2'
        },
        {
            id: 7,
            category: 'Community',
            image: 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&q=80',
            date: '2025-09-15',
            title: 'Community Outreach Initiative Launch',
            description: 'Launching our new community outreach program to serve more families in need.',
            slug: 'community-outreach-initiative'
        },
        {
            id: 8,
            category: 'Medical Support',
            image: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80',
            date: '2025-09-10',
            title: 'Mobile Health Clinic Expansion',
            description: 'Bringing essential healthcare services to underserved rural communities.',
            slug: 'mobile-health-clinic-expansion'
        },
        {
            id: 9,
            category: 'Education',
            image: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80',
            date: '2025-09-05',
            title: 'Scholarship Program Success',
            description: 'Celebrating the achievements of our scholarship recipients and their bright futures.',
            slug: 'scholarship-program-success'
        }
    ]
})


type Category = 'All Categories' | 'Education' | 'Community' | 'Medical Support' | 'Stories' | 'Events'

const activeCategory = ref<Category>('All Categories')

const categories: Category[] = [
    'All Categories',
    'Education',
    'Community',
    'Medical Support',
    'Stories',
    'Events'
]

const filteredPosts = computed(() => {
    if (activeCategory.value === 'All Categories') {
        return props.posts
    }
    return props.posts.filter(post => post.category === activeCategory.value)
})

const getCategoryColor = (category: string): string => {
    const colors: Record<string, string> = {
        Education: 'bg-orange-500',
        Stories: 'bg-orange-500',
        Events: 'bg-orange-500',
        Community: 'bg-blue-500',
        'Medical Support': 'bg-green-500'
    }
    return colors[category] || 'bg-gray-500'
}

const formatDate = (date: string): string => {
    return new Date(date).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    })
}
</script>

<template>
    <section class="py-12 px-10 bg-gray-50" aria-labelledby="blog-heading">
        <div class="container-primary">
            <!-- Category Filter -->
            <nav class="flex flex-wrap gap-3 mb-12" role="tablist" aria-label="Blog categories">
                <button v-for="category in categories" :key="category" :class="[
                    'px-6 py-3 rounded-full text-sm font-medium transition-all duration-200',
                    'focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2',
                    activeCategory === category
                        ? 'bg-orange-500 text-white shadow-md'
                        : 'bg-white text-gray-700 hover:bg-gray-100'
                ]" :aria-selected="activeCategory === category" :aria-label="`Filter by ${category}`" role="tab"
                    @click="activeCategory = category">
                    {{ category }}
                </button>
            </nav>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" role="list">
                <article v-for="post in filteredPosts" :key="post.id"
                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col"
                    role="listitem">
                    <!-- Image Container -->
                    <div class="relative h-48 overflow-hidden">
                        <img :src="post.image" :alt="post.title" class="w-full h-full object-cover" loading="lazy" />
                        <!-- Category Badge -->
                        <span :class="[
                            'absolute top-4 left-4 px-3 py-1 rounded text-white text-xs font-medium',
                            getCategoryColor(post.category)
                        ]" role="status" :aria-label="`Category: ${post.category}`">
                            {{ post.category }}
                        </span>
                    </div>

                    <!-- Content -->
                    <div class="p-6 flex flex-col flex-grow">
                        <!-- Date -->
                        <time :datetime="post.date" class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            {{ formatDate(post.date) }}
                        </time>

                        <!-- Title -->
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            {{ post.title }}
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm mb-6 flex-grow">
                            {{ post.description }}
                        </p>

                        <!-- Read More Link -->
                        <Link :href="`/blog/${post.slug}`"
                            class="inline-flex items-center gap-2 text-orange-500 font-medium text-sm hover:gap-3 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 rounded"
                            :aria-label="`Read more about ${post.title}`">
                        Read More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        </Link>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>