<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import ImpactSection from './Partials/ImpactSection.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';
import { TeamMember } from '@/types';
import { onMounted } from 'vue';
const pageUrl = usePage().url;

// Team member interface


// Component props for customization
interface Props {
    teamMembers?: TeamMember[];
}

const props = withDefaults(defineProps<Props>(), {
    teamMembers: () => [
        {
            id: 1,
            name: 'Patricia Asaam',
            position: 'Executive Director',
            image: 'https://placehold.co/400x500/png',
            alt: 'Patricia Asaam - Executive Director'
        },

        {
            id: 2,
            name: 'Stella O. Mensah',
            position: 'Program Manager',
            image: 'https://placehold.co/400x500/png',
            alt: 'Stella O. Mensah - Programme Manager'
        },

        {
            id: 3,
            name: 'Dr. Mathilda Osei',
            position: 'Medical Coordinator',
            image: 'https://placehold.co/400x500/png',
            alt: 'Dr. Mathilda Osei - Medical Coordinator'
        },
        {
            id: 4,
            name: 'Peter O. Mensah',
            position: 'Outreach Director',
            image: 'https://placehold.co/400x500/png',
            alt: 'Peter O. Mensah - Outreach Director'
        },
    ]
});

onMounted(() => {
    console.log("TEAM MEMBERS:", props.teamMembers);

})


</script>

<template>
    <WebsiteLayout class="min-h-svh">

        <Head>
            <title>About Us - Berea Noble Foundation</title>

            <!-- Primary Meta Tags -->
            <meta name="description" content="Learn about our mission to create lasting change through education, healthcare, and community support. Discover the story behind Berea Noble Foundation." />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="pageUrl" />
            <meta property="og:title" content="About Us - Berea Noble Foundation" />
            <meta property="og:description" content="Learn about our mission to create lasting change through education, healthcare, and community support. Discover the story behind Berea Noble Foundation." />

            <!-- Twitter -->
            <meta property="twitter:url" :content="pageUrl" />
            <meta property="twitter:title" content="About Us - Berea Noble Foundation" />
            <meta property="twitter:description" content="Learn about our mission to create lasting change through education, healthcare, and community support. Discover the story behind Berea Noble Foundation." />

            <!-- Canonical -->
            <link rel="canonical" :href="pageUrl" />

        </Head>

        <HeroSection image-url="@images/about-us-hero.jpeg" title="About Us" subtitle="Who we are and why we serve" />
        <section class="py-16 lg:px-10">
            <div class="container-primary grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Main Content -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">Our Foundation</h2>

                    <div class="text-lg lg:text-xl text-gray-800 leading-relaxed mb-6 lg:mb-8 font-normal space-y-6">
                        <p>
                            Founded in 2019, the Berea Noble Foundation emerged from a simple yet powerful belief: every
                            child deserves access to quality education and healthcare, regardless of their
                            circumstances. What started as a small community initiative has grown into a comprehensive
                            organization dedicated to transforming lives through sustainable programs and compassionate
                            service.
                        </p>

                        <p>
                            Our journey began when our founders witnessed the educational gaps in underserved
                            communities. Today, we continue to bridge these gaps through innovative programs, mobile
                            libraries, and community partnerships that create lasting change.
                        </p>
                    </div>
                </div>

                <!-- Right Column - Mission & Vision Cards -->
                <div class="space-y-8">
                    <!-- Mission Card -->
                    <div class="rounded-xl p-8 border border-l-slate-300 border-l-4 shadow-md">
                        <div class="flex gap-10 items-center mb-4">
                            <svg class="text-brand" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24"><!-- Icon from Unicons by Iconscout - https://github.com/Iconscout/unicons/blob/master/LICENSE -->
                                <path fill="currentColor"
                                    d="M12 5a7 7 0 1 0 7 7a7 7 0 0 0-7-7m0 12a5 5 0 1 1 5-5a5 5 0 0 1-5 5m0-8a3 3 0 1 0 3 3a3 3 0 0 0-3-3m0 4a1 1 0 1 1 1-1a1 1 0 0 1-1 1m0-12a11 11 0 1 0 11 11A11 11 0 0 0 12 1m0 20a9 9 0 1 1 9-9a9 9 0 0 1-9 9" />
                            </svg>
                            <h3 class="text-2xl font-semibold text-gray-900">Our Mission</h3>
                        </div>
                        <!-- <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">
                            To empower children and underserved communities through education, healthcare, and
                            sustainable development programs that create lasting positive impact.
                        </p> -->
                        <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">
                            To uplift vulnerable communities by supporting children, caring for the aged, and inspiring
                            a culture of reading and lifelong learning.
                        </p>
                    </div>

                    <!-- Vision Card -->
                    <div class="rounded-xl p-8 border border-l-slate-300 border-l-4 shadow-md">
                        <div class="flex gap-10 items-center mb-4">
                            <svg class="text-brand" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24"><!-- Icon from Majesticons by Gerrit Halfmann - https://github.com/halfmage/majesticons/blob/main/LICENSE -->
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M20.5 9.035a9.004 9.004 0 0 0-17 0m17 0c.324.928.5 1.926.5 2.965a9 9 0 0 1-.5 2.966m0-5.931h-17m0 0A9 9 0 0 0 3 12a9 9 0 0 0 .5 2.966m0 0a9.004 9.004 0 0 0 17 0m-17 0h17" />
                                    <path d="M12 21c4.97-4.97 4.97-13.03 0-18c-4.97 4.97-4.97 13.03 0 18" />
                                </g>
                            </svg>
                            <h3 class="text-2xl font-semibold text-gray-900">Our Vision</h3>
                        </div>
                        <!-- <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">
                            A world where every child has the opportunity to learn, grow, and thrive, supported by
                            strong, empowered communities.
                        </p> -->
                        <p class="text-lg lg:text-xl text-gray-700 leading-relaxed">
                            A world where every child and elder is empowered with knowledge, care, and equal
                            opportunity.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="py-16 lg:px-10 bg-gray-50">
            <div class="container-primary">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - Content -->
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">Our Story</h2>

                        <div class=" text-gray-700 space-y-6 mb-8">
                            <p class="text-prose mb-6">
                                Founded to empower children and underserved communities, Berea Noble Foundation provides
                                educational resources, mobile libraries, medical support, and community programs that
                                address the most pressing needs of vulnerable populations.
                            </p>
                        </div>

                        <!-- Quote -->
                        <blockquote class="border-l-4 border-brand/90 pl-6 py-2 mb-8">
                            <p class="text-xl italic text-brand font-medium">
                                "Education is not just about books and classrooms—it's about hope, opportunity, and the
                                belief that every child can change the world."
                            </p>
                        </blockquote>

                        <div class=" text-gray-700 space-y-6">
                            <p class="text-prose">
                                Through our comprehensive approach, we've learned that sustainable change requires more
                                than resources—it requires partnership, trust, and a deep understanding of each
                                community's unique needs and strengths. This philosophy guides everything we do, from
                                our mobile library initiatives to our healthcare outreach programs.
                            </p>

                            <p class="text-prose">
                                Today, we work across multiple communities, always with the same core principle:
                                empowering local leaders and families to create the change they want to see in their own
                                neighborhoods.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="@images/our-story.jpeg"
                                alt="Berea Noble Foundation team members in orange shirts working with children and community members in an outdoor setting with palm trees"
                                class="w-full h-full object-cover" />
                        </div>

                        <!-- Optional: Add a decorative element -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-500 rounded-full opacity-20 -z-10">
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-blue-500 rounded-full opacity-20 -z-10">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Core Values Section -->
        <section class="core-values bg-gray-50 py-16 lg:py-24 lg:px-10">
            <div class="container-primary">
                <!-- Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-900 mb-6">
                        Our Core Values
                    </h2>
                    <p class="text-lg lg:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                        These fundamental principles guide our work and shape our relationships with the
                        communities we serve.
                    </p>
                </div>

                <!-- Values Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 lg:gap-x-12 lg:gap-y-16">
                    <!-- Knowledge Transfer -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 14 14"><!-- Icon from Streamline by Streamline - https://creativecommons.org/licenses/by/4.0/ -->
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M6.375 1.653C5.386 1.099 3.536.42 1.496.179C.674.082 0 .76 0 1.588v8c0 .829.677 1.489 1.492 1.637c1.84.334 3.371 1.216 4.348 1.914q.248.175.535.266zm1.25 11.752q.287-.09.534-.265c.977-.698 2.508-1.581 4.349-1.915c.815-.148 1.492-.808 1.492-1.637v-8C14 .76 13.326.082 12.504.18c-2.04.242-3.89.92-4.879 1.474v11.752Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Knowledge Transfer
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    We believe education transforms lives and opens doors to endless possibilities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Compassion -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                                    <path fill="currentColor"
                                        d="M12 20.325q-.35 0-.712-.125t-.638-.4l-1.725-1.575q-2.65-2.425-4.788-4.812T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.325 0 2.5.562t2 1.538q.825-.975 2-1.537t2.5-.563q2.35 0 3.925 1.575T22 8.15q0 2.875-2.125 5.275T15.05 18.25l-1.7 1.55q-.275.275-.637.4t-.713.125" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Compassion
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    Every action we take is guided by empathy and genuine care for our communities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Community -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 24 24"><!-- Icon from Google Material Icons by Material Design Authors - https://github.com/material-icons/material-icons/blob/master/LICENSE -->
                                    <path fill="currentColor"
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5S5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V18c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05c.02.01.03.03.04.04c1.14.83 1.93 1.94 1.93 3.41V18c0 .35-.07.69-.18 1H22c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="mt-6g bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Community
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    We work hand-in-hand with local communities to create lasting positive change.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Impact -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE -->
                                    <g fill="none">
                                        <path
                                            d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor"
                                            d="M21.815 13.925a10.01 10.01 0 0 1-7.46 7.796c.51-.602.952-1.382 1.319-2.267c.365-.88.67-1.901.896-3.02c1.677-.432 3.196-1.096 4.47-1.945q.402-.269.775-.564m-19.63 0q.373.295.775.564c1.273.849 2.792 1.513 4.47 1.945c.225 1.119.53 2.14.896 3.02c.366.884.808 1.665 1.318 2.267a10.01 10.01 0 0 1-7.459-7.796m12.242 2.92a13.5 13.5 0 0 1-.601 1.844c-.347.838-.729 1.455-1.091 1.846c-.37.4-.624.465-.735.465s-.364-.065-.735-.465c-.362-.39-.744-1.008-1.091-1.846a13.5 13.5 0 0 1-.601-1.844c.788.102 1.6.155 2.427.155a19 19 0 0 0 2.427-.155m.536-6.116a21.7 21.7 0 0 1-.142 4.035c-.897.154-1.843.236-2.821.236a17 17 0 0 1-2.822-.236a21 21 0 0 1-.141-4.035c.946.177 1.94.271 2.963.271a16 16 0 0 0 2.963-.271m6.103-2.954c.46.986.765 2.06.88 3.189c-.501.673-1.177 1.302-2.016 1.86c-.87.58-1.896 1.07-3.039 1.437a23.5 23.5 0 0 0 .042-4.045a12 12 0 0 0 2.683-1.281a9 9 0 0 0 1.45-1.16m-18.132 0c.43.427.92.815 1.45 1.16a12 12 0 0 0 2.683 1.281a23.6 23.6 0 0 0 .041 4.045c-1.143-.367-2.169-.856-3.039-1.436c-.838-.559-1.514-1.188-2.016-1.861c.116-1.13.42-2.203.88-3.19ZM12 3c.11 0 .364.066.735.466c.362.39.744 1.008 1.091 1.846c.39.943.714 2.108.922 3.421C13.886 8.906 12.963 9 12 9a14 14 0 0 1-2.749-.267c.208-1.313.532-2.478.923-3.42c.347-.839.729-1.456 1.09-1.847c.372-.4.625-.466.736-.466m2.355-.721a10 10 0 0 1 5.64 3.715a6.7 6.7 0 0 1-1.469 1.264a9.7 9.7 0 0 1-1.842.923c-.231-1.361-.58-2.595-1.01-3.634c-.367-.885-.809-1.666-1.32-2.268Zm-4.71 0c-.51.602-.952 1.383-1.319 2.268c-.43 1.04-.78 2.273-1.01 3.634a9.7 9.7 0 0 1-1.842-.923a6.7 6.7 0 0 1-1.47-1.264a10 10 0 0 1 5.641-3.715" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Impact
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    We measure our success by the meaningful difference we make in people's lives.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Purpose -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 24 24"><!-- Icon from Prime Icons by PrimeTek - https://github.com/primefaces/primeicons/blob/master/LICENSE -->
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M12 4.5a7.5 7.5 0 1 0 0 15a7.5 7.5 0 0 0 0-15M3 12a9 9 0 1 1 18 0a9 9 0 0 1-18 0m9-4.375a4.375 4.375 0 1 0 0 8.75a4.375 4.375 0 0 0 0-8.75M6.125 12a5.875 5.875 0 1 1 11.75 0a5.875 5.875 0 0 1-11.75 0m4.625 0a1.25 1.25 0 1 1 2.5 0a1.25 1.25 0 0 1-2.5 0M12 9.25a2.75 2.75 0 1 0 0 5.5a2.75 2.75 0 0 0 0-5.5"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Purpose
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    Our mission drives every decision, ensuring resources reach those who need them
                                    most.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Excellence -->
                    <div class="relative value-card group">
                        <div class="absolute -top-8 left-0 w-full flex justify-center">
                            <!-- Icon -->
                            <div
                                class="text-background size-16 bg-brand rounded-full inline-flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8"
                                    viewBox="0 0 24 24"><!-- Icon from BoxIcons Solid by Atisa - https://creativecommons.org/licenses/by/4.0/ -->
                                    <path fill="currentColor"
                                        d="M5 8.999a6.99 6.99 0 0 0 2.879 5.646l.001.001a7 7 0 0 0 1.881.979l.051.019a7 7 0 0 0 1.163.271a7 7 0 0 0 1.024.085H12c.35 0 .69-.034 1.027-.084l.182-.028q.505-.088.981-.243l.042-.016C17 14.693 19 12.078 19 8.999C19 5.14 15.86 2 12 2S5 5.14 5 8.999M12 4c2.756 0 5 2.242 5 4.999h-2A3.003 3.003 0 0 0 12 6zM7.521 16.795V22L12 20.5l4.479 1.5l.001-5.205a8.93 8.93 0 0 1-8.959 0" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center mt-6">
                                <!-- Title -->
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-4">
                                    Excellence
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-600 leading-relaxed">
                                    We strive for the highest standards in all our programs and community initiatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Team members Section -->
        <section class="bg-white py-16 lg:py-24 lg:px-10">
            <div class="container-primary">
                <!-- Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-gray-900 mb-6">
                        Meet Our Team
                    </h2>
                    <p class="text-lg lg:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                        Our dedicated team of professionals brings together diverse expertise, unified by a
                        shared commitment to creating positive change in communities.
                    </p>
                </div>

                <!-- Team Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6 text-nowrap content-stretch">
                    <!-- Member -->
                    <div v-for="member in props.teamMembers" :key="member.id" class="team-member group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <!-- Image Container -->
                            <div class="aspect-[4/5] overflow-hidden">
                                <img :src="member.image || 'https://placeholder.pics/svg/400x500/DEDEDE/555555/%20'" :alt="member.alt"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            </div>

                            <!-- Content -->
                            <div class="p-6 text-center">
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-2">
                                    {{ member.name }}
                                </h3>
                                <p class="text-brand font-medium text-base lg:text-lg">
                                    {{ member.position }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <ImpactSection />

        <MissionCtaSection />
        <WebsiteFooter class="bg-brand/30" />
    </WebsiteLayout>
</template>
