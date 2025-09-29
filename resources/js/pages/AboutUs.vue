<script setup lang="ts">
import WebsiteLayout from '@/layouts/WebsiteLayout.vue';
import MissionCtaSection from './Partials/MissionCtaSection.vue';
import ImpactSection from './Partials/ImpactSection.vue';
import WebsiteFooter from '@/pages/Partials/WebsiteFooter.vue';
import HeroSection from '@/pages/Partials/HeroSection.vue';

// Team member interface
interface TeamMember {
    id: number;
    name: string;
    position: string;
    image: string;
    alt: string;
}

// Component props for customization
interface Props {
    teamMembers?: TeamMember[];
}

const teamMembers = [
    {
        id: 1,
        name: 'Sarah Johnson',
        position: 'Executive Director',
        image: '/api/placeholder/400/500',
        alt: 'Sarah Johnson - Executive Director'
    },
    {
        id: 2,
        name: 'Michael Johnson',
        position: 'Program Manager',
        image: '/api/placeholder/400/500',
        alt: 'Michael Johnson - Program Manager'
    },
    {
        id: 3,
        name: 'Dr. Mathilda Osei',
        position: 'Medical Coordinator',
        image: '/api/placeholder/400/500',
        alt: 'Dr. Mathilda Osei - Medical Coordinator'
    },
    {
        id: 4,
        name: 'Peter Frimpong',
        position: 'Community Outreach Director',
        image: '/api/placeholder/400/500',
        alt: 'Peter Frimpong - Community Outreach Director'
    }
];

</script>

<template>
    <WebsiteLayout class="min-h-svh">
        <HeroSection
                image-url="@images/about-us-hero.jpeg"
                title="About Us"
                subtitle="Who we are and why we serve"
        />
        <section class="py-16 max-w-7xl px-10">
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
                            To uplift vulnerable communities by supporting children, caring for the aged, and inspiring a culture of reading and lifelong learning.
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
                            A world where every child and elder is empowered with knowledge, care, and equal opportunity.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="py-16 px-10 bg-gray-50">
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
        <section class="core-values bg-gray-50 py-16 lg:py-24 px-10">
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
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Knowledge Transfer -->
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                    </svg>
                                </div>

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
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5 2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                    </svg>
                                </div>

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
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C18.67,14 24,15.33 24,18V20H8V18C8,15.33 13.33,14 16,14M8,4C10.21,4 12,5.79 12,8C12,10.21 10.21,12 8,12C5.79,12 4,10.21 4,8C4,5.79 5.79,4 8,4M8,14C10.67,14 16,15.33 16,18V20H0V18C0,15.33 5.33,14 8,14Z" />
                                    </svg>
                                </div>

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
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8Z" />
                                    </svg>
                                </div>

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
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,2L13.09,8.26L22,9L13.09,9.74L12,16L10.91,9.74L2,9L10.91,8.26L12,2M6.5,12.5L7.5,16.5L11.5,17.5L7.5,18.5L6.5,22.5L5.5,18.5L1.5,17.5L5.5,16.5L6.5,12.5M17.5,12.5L18.5,16.5L22.5,17.5L18.5,18.5L17.5,22.5L16.5,18.5L12.5,17.5L16.5,16.5L17.5,12.5Z" />
                                    </svg>
                                </div>

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
                    <div class="value-card group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 h-full border border-gray-100 hover:border-brand/20">
                            <div class="text-center">
                                <!-- Icon -->
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-brand rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M5,16L3,5H1V3H4L6,14H18.5L19.5,7H7.5L8.5,9H17.5L16.5,11H9.5L10.5,13H15.5L14.5,15H7L5,16M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22A2,2 0 0,1 15,20A2,2 0 0,1 17,18M12,2L13.5,7L18,7L14.5,10L16,15L12,12L8,15L9.5,10L6,7L10.5,7L12,2Z" />
                                    </svg>
                                </div>

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
        <section class="bg-white py-16 lg:py-24 px-10">
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
                    <!-- Sarah Johnson -->
                    <div class="team-member group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <!-- Image Container -->
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="https://placehold.co/400x500/png" alt="Sarah Johnson - Executive Director"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            </div>

                            <!-- Content -->
                            <div class="p-6 text-center">
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-2">
                                    Patricia Asaam
                                </h3>
                                <p class="text-brand font-medium text-base lg:text-lg">
                                    Executive Director
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Michael Johnson -->
                    <div class="team-member group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <!-- Image Container -->
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="https://placehold.co/400x500/png" alt="Michael Johnson - Program Manager"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            </div>

                            <!-- Content -->
                            <div class="p-6 text-center">
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-2">
                                    Stella O. Mensah
                                </h3>
                                <p class="text-brand font-medium text-base lg:text-lg">
                                    Program Manager
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dr. Mathilda Osei -->
                    <div class="team-member group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <!-- Image Container -->
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="https://placehold.co/400x500/png" alt="Dr. Mathilda Osei - Medical Coordinator"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            </div>

                            <!-- Content -->
                            <div class="p-6 text-center">
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-2">
                                    Dr. Mathilda Osei
                                </h3>
                                <p class="text-brand font-medium text-base lg:text-lg">
                                    Medical Coordinator
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Peter Frimpong -->
                    <div class="team-member group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <!-- Image Container -->
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="https://placehold.co/400x500/png" alt="Peter Frimpong - Community Outreach Director"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy" />
                            </div>

                            <!-- Content -->
                            <div class="p-6 text-center">
                                <h3 class="text-xl lg:text-2xl font-semibold text-gray-900 mb-2">
                                    Peter Frimpong
                                </h3>
                                <p class="text-brand font-medium text-base lg:text-lg">
                                    Outreach Director
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
