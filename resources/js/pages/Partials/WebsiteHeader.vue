<script setup lang="ts">
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

const isOpen = ref(false)
</script>

<template>
    <header class="sticky top-0 z-50 bg-white shadow px-10">
        <div class="container-primary">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="#">
                    <img class="h-14 md:h-20" src="@images/logo-full.png" alt="Banner" />
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-6">
                    <ul class="flex gap-4">
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/">Home</Link>
                        </li>
                        <li>
                            <Link class="rounded-xl px-4 py-2 hover:bg-brand/30" href="/about-us">About Us</Link>
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
                <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 focus:outline-none" @click="isOpen = !isOpen">
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
                <nav v-if="isOpen" class="md:hidden bg-white border-t shadow-inner">
                    <ul class="flex flex-col px-4 py-3 space-y-2">
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/">Home</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/about-us">About Us</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/programs">Programs</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/gallery">Gallery</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/blog">Blog</Link>
                        </li>
                        <li>
                            <Link class="block rounded-lg px-4 py-2 hover:bg-brand/30" href="/contact">Contact</Link>
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
