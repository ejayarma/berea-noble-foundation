<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <header class="shadow lg:px-10">
        <div class="container-primary">
            <div class="px-10 flex items-center justify-between">
                <a href="#">
                    <img class="h-20" src="@images/logo-full.png" alt="Banner" />
                </a>
                <ul class="inline-flex">
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/">Home</Link>
                    </li>
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/about-us">About Us</Link>
                    </li>
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/programs">Programs</Link>
                    </li>
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/gallery">Gallery</Link>
                    </li>
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/blog">Blog</Link>
                    </li>
                    <li>
                        <Link class="rounded-xl px-6 py-2 hover:bg-brand/30" href="/contact">Contact</Link>
                    </li>
                </ul>
                <Link class="button-primary" href="/donate">Donate</Link>
            </div>
        </div>
    </header>
</template>
