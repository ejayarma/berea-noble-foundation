<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { HTMLAttributes } from 'vue';

const props = defineProps<{
    class?: HTMLAttributes['class']
}>();

</script>

<template>
    <footer :class="props.class">
        <div class="bg-darkest text-background rounded-t-2xl py-12 px-10">
            <div class="container-primary">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <!-- Logo & Mission -->
                    <div>
                        <img src="@images/logo-full.png" alt="Berea Noble Foundation" class="h-16 mb-6" />
                        <p class="mb-8 text-prose text-background">
                            Empowering communities with education, healthcare, and hope.
                        </p>
                        <div class="flex space-x-4">
                            <Link href="#" class="hover:text-brand transition-colors duration-300">
                                <!-- Facebook -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE --><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M4 12a8 8 0 1 1 9 7.938V14h2a1 1 0 1 0 0-2h-2v-2a1 1 0 0 1 1-1h.5a1 1 0 1 0 0-2H14a3 3 0 0 0-3 3v2H9a1 1 0 1 0 0 2h2v5.938A8 8 0 0 1 4 12m8 10c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
                            </Link>
                            <Link href="#" class="hover:text-brand transition-colors duration-300">
                                <!-- Twitter -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE --><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M19.753 4.659a1 1 0 0 0-1.506-1.317l-5.11 5.84L8.8 3.4A1 1 0 0 0 8 3H4a1 1 0 0 0-.8 1.6l6.437 8.582l-5.39 6.16a1 1 0 0 0 1.506 1.317l5.11-5.841L15.2 20.6a1 1 0 0 0 .8.4h4a1 1 0 0 0 .8-1.6l-6.437-8.582l5.39-6.16ZM16.5 19L6 5h1.5L18 19z"/></g></svg>
                            </Link>
                            <Link href="#" class="hover:text-brand transition-colors duration-300">
                                <!-- Instagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE --><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M16 3a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8a5 5 0 0 1 5-5zm0 2H8a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3m-4 3a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4m4.5-3.5a1 1 0 1 1 0 2a1 1 0 0 1 0-2"/></g></svg>
                            </Link>
                            <Link href="#" class="hover:text-brand transition-colors duration-300">
                                <!-- LinkedIn -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE --><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm0 2H6a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1M8 10a1 1 0 0 1 .993.883L9 11v5a1 1 0 0 1-1.993.117L7 16v-5a1 1 0 0 1 1-1m3-1a1 1 0 0 1 .984.821a6 6 0 0 1 .623-.313c.667-.285 1.666-.442 2.568-.159c.473.15.948.43 1.3.907c.315.425.485.942.519 1.523L17 12v4a1 1 0 0 1-1.993.117L15 16v-4c0-.33-.08-.484-.132-.555a.55.55 0 0 0-.293-.188c-.348-.11-.849-.052-1.182.09c-.5.214-.958.55-1.27.861L12 12.34V16a1 1 0 0 1-1.993.117L10 16v-6a1 1 0 0 1 1-1M8 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"/></g></svg>
                            </Link>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Explore</h3>
                        <ul class="space-y-4">
                            <li>
                                <Link href="/" class="hover:text-brand">Home</Link>
                            </li>
                            <li>
                                <Link href="/about-us" class="hover:text-brand">About Us</Link>
                            </li>
                            <li>
                                <Link href="/programs" class="hover:text-brand">Programs</Link>
                            </li>
                            <li>
                                <Link href="/gallery" class="hover:text-brand">Gallery</Link>
                            </li>
                            <li>
                                <Link href="/blog" class="hover:text-brand">Blog</Link>
                            </li>
                            <li>
                                <Link href="/contact" class="hover:text-brand">Contact</Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Stay Connected -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Connect With Us</h3>
                        <p class="text-prose text-background mb-4">
                            Follow us on social media and stay updated on our programs and events.
                        </p>
                        <div class="mt-10">
                            <Link href="/donate" class="button-primary">Donate Now</Link>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Reach Us</h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="tel:+233244236578" class="hover:text-brand transition-colors duration-300">
                                    +233 244 236 578
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@bereanoblefoundation.com"
                                    class="hover:text-brand transition-colors duration-300">
                                    info@bereanoblefoundation.com
                                </a>
                            </li>
                            <li>
                                <p class="text-prose text-background">
                                    201, Avenue of the Stars <br> Airport Hills, Accra
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom note -->
                <div class="mt-12 border-t border-brand pt-6 text-center text-sm text-background/80">
                    © {{ new Date().getFullYear() }} Berea Noble Foundation. All rights reserved.
                </div>
            </div>
        </div>


    </footer>
</template>