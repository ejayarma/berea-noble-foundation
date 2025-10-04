<script setup lang="ts">
import { ref, computed } from 'vue'
import { InertiaLinkProps, Link, usePage } from '@inertiajs/vue3'
import { urlIsActive } from '@/lib/utils';

const isOpen = ref(false)

const page = usePage();
const auth = computed(() => page.props.auth);

const isCurrentRoute = computed(
    () => (url: NonNullable<InertiaLinkProps['href']>) =>
        urlIsActive(url, page.url),
);

const activeItemStyles = computed(
    () => (url: NonNullable<InertiaLinkProps['href']>) =>
        isCurrentRoute.value(toUrl(url))
            ? 'text-neutral-900 dark:bg-neutral-800 dark:text-neutral-100'
            : '',
);

</script>

<template>
    <header class="sticky top-0 z-50 bg-white shadow lg:px-10 text-center">
        <div class="container-primary">
            <div class="flex items-center justify-between py-4 relative">
                <!-- Logo -->
                <a href="/">
                    <img class="h-14 md:h-20" src="@images/logo-full.png" alt="Banner" />
                </a>

                <!-- Desktop Nav -->
                <nav aria-label="Navigation" class="hidden lg:flex items-center gap-6">
                    <ul class="flex gap-4">
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/">Home</Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/about-us">About <span class="hidden xl:inline">Us</span></Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/programs">Programs</Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/gallery">Gallery</Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/blog">Blog</Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/contact">Contact</Link>
                        </li>
                    </ul>
                    <Link class="button-primary ml-4" href="/donate">Donate</Link>
                </nav>

                <!-- Mobile Hamburger -->
                <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100 focus:outline-none" @click="isOpen = !isOpen">
                    <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Nav -->
            <transition name="fade">
                <nav aria-label="Mobile navigation" v-if="isOpen" class="lg:hidden bg-white border-t shadow-inner min-h-svh xl:min-h-max">
                    <ul class="flex flex-col px-4 py-10 space-y-2">
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/">Home</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/about-us">About Us</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/programs">Programs</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/gallery">Gallery</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/blog">Blog</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-3 hover:bg-brand/30 active:border-2 active:border-brand/30" href="/contact">Contact</Link>
                        </li>
                        <li class="w-full">
                            <Link class="button-primary block w-full text-center" href="/donate">Donate</Link>
                        </li>
                    </ul>
                </nav>
            </transition>
        </div>
    </header>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
