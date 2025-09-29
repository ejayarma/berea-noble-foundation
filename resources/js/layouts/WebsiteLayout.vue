<script setup lang="ts">
import WebsiteHeader from '@/pages/Partials/WebsiteHeader.vue';

</script>

<template>
    <div class="min-h-screen">
        <WebsiteHeader />
        <main>
            <slot></slot>
        </main>
    </div>
</template>
