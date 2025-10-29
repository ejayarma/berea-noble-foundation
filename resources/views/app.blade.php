<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        {{-- <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script> --}}

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        {{-- <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style> --}}

        <title inertia>{{ config('app.name', 'Laravel') }} - Empowering Communities Through Education & Care</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600" rel="stylesheet" />

        <!-- Primary Meta Tags -->
        <meta name="title" content="Home | {{ config('app.name') }}} - Empowering Communities Through Education & Care" />
        <meta name="description" content="Berea Noble Foundation brings knowledge and hope to underserved communities through mobile libraries, educational programs, healthcare for the elderly, and support services for children." />
        <meta name="keywords" content="mobile library, education foundation, community development, children support, elderly care, book distribution, Ghana charity, nonprofit organization, community book clubs, educational programs" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="{{ config('app.name') }}" />
        <meta name="language" content="English" />
        <meta name="revisit-after" content="7 days" />

        <!-- Open Graph / Facebook -->
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:title" content="Berea Noble Foundation - Empowering Communities Through Education & Care" />
        <meta property="og:description" content="Creating lasting change through education, healthcare, and support services." />
        <meta property="og:image" content="{{ config('app.url') }}/images/ogt.png" />
        <meta property="og:site_name" {{ config('app.name') }} />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" :content="pageUrl" />
        <meta property="twitter:title" content="Berea Noble Foundation - Empowering Communities Through Education & Care" />
        <meta property="twitter:description" content="Creating lasting change through education, healthcare, and support services." />
        <meta property="twitter:image" content="{{ config('app.url') }}/images/ogt.png"  />

        <!-- Canonical -->
        <link rel="canonical" href="{{ config('app.url') }}" />

        <!-- Geo Tags -->
        <meta name="geo.region" content="GH" />
        <meta name="geo.placename" content="Accra" />

        <!-- JSON-LD Schema -->
        @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "NGO",
                "name": "Berea Noble Foundation",
                "description": "Empowering communities through education, healthcare, and support services",
                "url": "https://bereanoblefoundation.com/",
                "logo": "https://bereanoblefoundation.com/images/logo-full.png",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Accra",
                    "addressRegion": "Greater Accra",
                    "addressCountry": "GH"
                }
            }
            </script>
        @endverbatim

        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
