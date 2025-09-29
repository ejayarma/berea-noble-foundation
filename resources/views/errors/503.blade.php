<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berea Noble Foundation - Coming Soon</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#ff6b35',
                        background: '#ffffff'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 1s ease-out forwards',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite alternate'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0px)' }
                        },
                        pulseGlow: {
                            '0%': { boxShadow: '0 0 20px rgba(255, 107, 53, 0.3)' },
                            '100%': { boxShadow: '0 0 30px rgba(255, 107, 53, 0.6)' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #19191a 0%, #120a19 100%);
        }

        .mission-bg {
            background-color: #f7f1eb;
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        .animate-delay-3 {
            animation-delay: 0.6s;
        }

        .animate-delay-4 {
            animation-delay: 0.8s;
        }
    </style>
</head>

<body class="overflow-x-hidden">

    <!-- Hero Section -->
    <section class="relative min-h-svh gradient-bg overflow-hidden">
        <!-- Background floating elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-brand/10 rounded-full blur-xl floating"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-purple-300/20 rounded-full blur-lg floating"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-32 left-1/4 w-40 h-40 bg-blue-300/10 rounded-full blur-2xl floating"
                style="animation-delay: 4s;"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 flex items-center justify-center min-h-svh px-4">
            <div class="text-center max-w-4xl mx-auto">

                <!-- Logo -->
                <div class="my-8 opacity-0 fade-in-up">
                    <div
                        class="w-20 h-20 mx-auto bg-white rounded-2xl flex items-center justify-center mb-6 animate-pulse-glow">
                        <img width="50" src="/images/logo-cropped.png" alt="">

                    </div>
                </div>

                <!-- Heading -->
                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-background mb-6 leading-tight opacity-0 fade-in-up animate-delay-1">
                    Berea Noble<br><span class="text-brand">Foundation</span>
                </h1>

                <!-- Tagline -->
                <p class="text-xl sm:text-2xl lg:text-3xl text-gray-200 mb-8 opacity-0 fade-in-up animate-delay-2">
                    Bringing Knowledge & Hope to Communities
                </p>

                <!-- Description -->
                <p
                    class="text-lg sm:text-xl text-gray-300 mb-12 max-w-2xl mx-auto opacity-0 fade-in-up animate-delay-3">
                    We're working hard to launch our new website. Stay tuned for inspiring stories, community impact,
                    and ways you can make a difference.
                </p>

                <!-- Coming soon badge -->
                <div
                    class="inline-block glass-effect rounded-full px-6 py-3 mb-12 opacity-0 fade-in-up animate-delay-4">
                    <span class="text-background font-semibold text-lg">🚀 Coming Soon</span>
                </div>

                <!-- Email signup -->
                <!-- <div class="max-w-md mx-auto mb-12 opacity-0 fade-in-up animate-delay-4">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Enter your email"
                            class="flex-1 px-6 py-4 rounded-lg bg-background/20 backdrop-blur-sm border border-background/30 text-background placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-brand focus:border-transparent">
                        <button type="button"
                            class="bg-brand hover:bg-orange-600 text-background font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg whitespace-nowrap">
                            Notify Me
                        </button>
                    </div>
                </div> -->
                <!-- Social links -->
                <div class="flex justify-center space-x-6 opacity-0 fade-in-up animate-delay-4">
                    <a href="tel:+233244236578"
                        class="w-12 h-12 bg-background/20 backdrop-blur-sm rounded-full flex items-center justify-center text-background hover:bg-brand hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE -->
                            <g fill="none" fill-rule="evenodd">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor"
                                    d="M8.172 15.829c3.845 3.845 7.408 4.266 8.454 4.305c1.264.046 2.554-.986 3.112-2.043c-.89-1.044-2.049-1.854-3.318-2.732c-.749.748-1.672 2.138-2.901 1.64c-.699-.281-2.425-1.076-3.933-2.585S7.283 11.18 7 10.482c-.498-1.231.896-2.156 1.645-2.905c-.878-1.29-1.674-2.479-2.716-3.324c-1.072.56-2.11 1.84-2.063 3.121c.039 1.046.46 4.609 4.306 8.455m8.38 6.304c-1.44-.053-5.521-.617-9.795-4.89c-4.273-4.274-4.836-8.354-4.89-9.795c-.08-2.196 1.602-4.329 3.545-5.162a1.47 1.47 0 0 1 1.445.159c1.608 1.173 2.717 2.95 3.67 4.342A1.504 1.504 0 0 1 10.35 8.7l-1.356 1.357C9.309 10.752 9.95 11.95 11 13s2.248 1.691 2.944 2.006l1.355-1.356a1.5 1.5 0 0 1 1.918-.171c1.42.984 3.088 2.077 4.304 3.634a1.47 1.47 0 0 1 .189 1.485c-.837 1.953-2.955 3.616-5.158 3.535" />
                            </g>
                        </svg>
                    </a>
                    <a href="mailto:bereanoble1@gmail.com"
                        class="w-12 h-12 bg-background/20 backdrop-blur-sm rounded-full flex items-center justify-center text-background hover:bg-brand hover:scale-110 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24"><!-- Icon from MingCute Icon by MingCute Design - https://github.com/Richard9394/MingCute/blob/main/LICENSE -->
                            <g fill="none">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor"
                                    d="M20 4a2 2 0 0 1 1.995 1.85L22 6v12a2 2 0 0 1-1.85 1.995L20 20H4a2 2 0 0 1-1.995-1.85L2 18V6a2 2 0 0 1 1.85-1.995L4 4zm0 3.414l-6.94 6.94a1.5 1.5 0 0 1-2.12 0L4 7.414V18h16zM18.586 6H5.414L12 12.586z" />
                            </g>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="grid place-items-center my-10">

            <div class="left-1/2 transform -translate-x-1/2 animate-bounce opacity-0 fade-in-up animate-delay-4">
                <svg class="w-6 h-6 text-background" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Mission preview -->
    <section class="mission-bg py-16 lg:py-24">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Our Mission Preview</h2>
            <p class="text-lg lg:text-xl text-gray-700 max-w-4xl mx-auto mb-12">
                Empowering children and supporting the underprivileged through education, healthcare, and community
                programs.
            </p>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="text-3xl font-bold text-brand mb-2">1000+</div>
                    <div class="text-gray-600">Books to Share</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand mb-2">500+</div>
                    <div class="text-gray-600">Children to Impact</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand mb-2">50+</div>
                    <div class="text-gray-600">Communities to Serve</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand mb-2">25</div>
                    <div class="text-gray-600">Active Volunteers</div>
                </div>
            </div>
            <!-- <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-brand hover:bg-orange-600 text-background font-semibold px-8 py-4 rounded-lg">Learn
                    More</button>
                <button
                    class="border-2 border-brand text-brand hover:bg-brand hover:text-background font-semibold px-8 py-4 rounded-lg">Get
                    Involved</button>
            </div> -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-6xl mx-auto text-center px-4">
            <div class="w-16 h-16 mx-auto bg-white rounded-xl flex items-center justify-center mb-6">
                <img width="50" src="/images/logo-cropped.png" alt="">

            </div>
            <h3 class="text-2xl font-bold text-background mb-4">Berea Noble Foundation</h3>
            <p class="text-gray-400 mb-8">Dedicated to creating lasting change in communities.</p>
            <div class="border-t border-gray-700 pt-8">
                <p class="text-sm text-gray-500">© 2025 Berea Noble Foundation. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script>
        /*
        document.querySelector('button[type="button"]').addEventListener('click', () => {
            const email = document.querySelector('input[type="email"]').value;
            if (email) {
                alert("Thank you! We'll notify you when we launch.");
                document.querySelector('input[type="email"]').value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });
        */

        document.querySelector('.animate-bounce').addEventListener('click', () => {
            document.querySelector('.mission-bg').scrollIntoView({ behavior: 'smooth' });
        });

        window.addEventListener('load', () => {
            document.querySelectorAll('.fade-in-up').forEach((el, i) => {
                setTimeout(() => { el.style.opacity = '1'; }, i * 200);
            });
        });
    </script>
</body>

</html>
