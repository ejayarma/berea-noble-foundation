<template>

    <!-- Second version with more precise color matching -->
    <section class="mission-bg mt-16">
        <div class="w-full max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 min-h-[600px]">

                <!-- Left Content Side - More precise styling -->
                <div
                    class="mission-bg px-8 sm:px-12 lg:px-20 xl:px-24 py-16 lg:py-20 xl:py-24 flex flex-col justify-center">

                    <!-- Heading with exact font weight and spacing -->
                    <h2
                        class="text-4xl lg:text-5xl xl:text-[3.5rem] font-bold text-gray-900 mb-8 lg:mb-10 xl:mb-12 leading-[1.1] tracking-tight max-w-lg">
                        About Our Mission
                    </h2>

                    <!-- Content with precise line height and spacing -->
                    <div class="space-y-6 lg:space-y-8 max-w-xl">
                        <p class="text-lg lg:text-xl xl:text-[1.375rem] text-gray-800 leading-[1.6] font-normal">
                            The Berea Noble Foundation is dedicated to creating lasting change in communities
                            through education, healthcare, and support services. We believe that every child
                            deserves access to quality education and every elder deserves dignity and care in
                            their golden years.
                        </p>

                        <p class="text-lg lg:text-xl xl:text-[1.375rem] text-gray-800 leading-[1.6] font-normal">
                            Through our mobile library initiatives and community programs, we're building
                            bridges to knowledge and fostering hope in underserved communities across the
                            region.
                        </p>
                    </div>

                    <!-- Button with exact positioning -->
                    <div class="mt-10 lg:mt-12 xl:mt-14">
                        <button
                            class="inline-flex items-center justify-center px-9 py-4 border-2 border-brand text-brand font-semibold text-lg rounded-lg hover:bg-brand hover:text-background transition-all duration-300 shadow-sm">
                            Read More
                        </button>
                    </div>
                </div>

                <!-- Right Image Side -->
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Mobile library van with children"
                        class="w-full h-full object-cover object-center scale-105">
                </div>
            </div>
        </div>
    </section>
</template>
