<script setup lang="ts">
import { cn } from '@/lib/utils'
import { HTMLAttributes } from 'vue';

const props = defineProps < {
    title?: string,
    subtitle?: string,
    class?: HTMLAttributes['class']
}> ();

</script>

<template>
    <!-- Join Our Mission CTA Section -->
    <section :class="cn('bg-brand/30 py-16 lg:py-24 px-10', props.class)">
        <div class="container-primary text-center">

            <!-- CTA Header -->
            <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-8 lg:mb-12  sm:whitespace-pre-line">
                {{ props.title ?? 'Join Our Mission Today' }}
            </h2>

            <!-- CTA Description -->
            <p class="text-lg lg:text-xl xl:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed mb-12 lg:mb-16  sm:whitespace-pre-line">
                {{ props.subtitle ?? 'Your contribution helps us reach more communities, support more children, and create lasting \npositive change. Every donation counts.' }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 lg:gap-6 justify-center items-center">
                <!-- Primary CTA Button -->
                <button
                    class="bg-brand hover:bg-orange-600 text-background font-semibold px-8 lg:px-10 py-4 lg:py-5 rounded-xl text-lg lg:text-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl min-w-[200px] shadow-lg">
                    Make a Donation
                </button>

                <!-- Secondary CTA Button -->
                <button
                    class="border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold px-8 lg:px-10 py-4 lg:py-5 rounded-xl text-lg lg:text-xl transition-all duration-300 transform hover:scale-105 min-w-[200px]">
                    Become a Volunteer
                </button>
            </div>

        </div>
    </section>
</template>