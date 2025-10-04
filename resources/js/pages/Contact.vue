<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import ContactFormSection from './ContactFormSection.vue';
import ContactInfoSection from './ContactInfoSection.vue';



</script>

<template>
    <WebsiteLayout class="min-h-svh">

        <Head title="Contact" />

        <HeroSection title="Contact Us" subtitle="We'd love to hear from you" />
        <section class="py-16 lg:px-10">
            <div class="container-primary">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">
                    Send Us a Message
                </h2>
                <p class="text-gray-600 text-center mb-12">
                    Have questions about our programs or want to get involved? We'd love to hear from you.
                    Fill out the form below and we'll respond as soon as possible.
                </p>
            </div>
        </section>
        <ContactFormSection />
        <ContactInfoSection />
        <MissionCtaSection title="Partner with us in bringing hope and knowledge to communities."
            :subtitle="'Every contribution makes a difference. Join us in our mission to empower communities \nand create lasting positive change across Ghana.'" />
        <WebsiteFooter class="bg-brand/30" />


    </WebsiteLayout>
</template>
