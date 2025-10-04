<script setup lang="ts">
import { cn } from '@/lib/utils'
import { HTMLAttributes } from 'vue';


const props = withDefaults(defineProps<{
  title?: string
  subtitle?: string
  variant?: 'dark' | 'light'
  showHeader?: boolean
  class?: HTMLAttributes['class']
}>(), {
  variant: 'light',
  showHeader: true
})

const variantBgClass = {
    dark: 'bg-darkest',
    light: 'bg-brand/10'
}
const variantTextClass = {
    dark: 'text-gray-200',
    light: 'text-gray-800'
}

// Simple intersection observer for counter animations
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('counter-animate');
        }
    });
}, observerOptions);

// Observe all counter elements
document.querySelectorAll('.impact-stat').forEach(el => {
    observer.observe(el);
});

</script>
<template>
    <!-- Our Impact Section -->
    <section :class="cn(variantBgClass[props.variant],'py-16 lg:py-24 lg:px-10', props.class)">
        <div class="container-primary">

            <!-- Header -->
            <div v-if="props.showHeader" class="text-center mb-16 lg:mb-20">
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 lg:mb-8">
                    {{ props.title ?? 'Our Impact' }}
                </h2>
                <p class="text-prose-alt">
                    {{ props.subtitle ?? "Together, we're making a measurable difference in communities across the region." }}
                </p>
            </div>

            <!-- Impact Statistics Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 xl:gap-16">

                <!-- Books Shared -->
                <div class="impact-stat text-center counter-animate">
                    <div class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-brand mb-4 lg:mb-6">
                        1000+
                    </div>
                    <div :class="[variantTextClass[props.variant], 'text-lg sm:text-xl lg:text-2xl font-medium']">
                        Books Shared
                    </div>
                </div>

                <!-- Children Impacted -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.2s;">
                    <div class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-brand mb-4 lg:mb-6">
                        500
                    </div>
                    <div :class="[variantTextClass[props.variant], 'text-lg sm:text-xl lg:text-2xl font-medium']">
                        Children Impacted
                    </div>
                </div>

                <!-- Communities Served -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.4s;">
                    <div class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-brand mb-4 lg:mb-6">
                        50+
                    </div>
                    <div :class="[variantTextClass[props.variant], 'text-lg sm:text-xl lg:text-2xl font-medium']">
                        Communities Served
                    </div>
                </div>

                <!-- Active Volunteers -->
                <div class="impact-stat text-center counter-animate" style="animation-delay: 0.6s;">
                    <div class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold text-brand mb-4 lg:mb-6">
                        25
                    </div>
                    <div :class="[variantTextClass[props.variant], 'text-lg sm:text-xl lg:text-2xl font-medium']">
                        Active Volunteers
                    </div>
                </div>

            </div>
        </div>

    </section>
</template>
