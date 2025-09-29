<script setup lang="ts">
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import ContactFormSection from './ContactFormSection.vue';
import ContactInfoSection from './ContactInfoSection.vue';



</script>

<template>
    <WebsiteLayout class="min-h-svh">

        <HeroSection 
            title="Contact Us"
            subtitle="We'd love to hear from you" 
        />
        <ContactFormSection />
        <ContactInfoSection />
        <MissionCtaSection 
            title="Partner with us in bringing hope and knowledge to communities."
            :subtitle="'Every contribution makes a difference. Join us in our mission to empower communities \nand create lasting positive change across Ghana.'"
        />
        <WebsiteFooter class="bg-brand/30" />


    </WebsiteLayout>
</template>
