<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>@yield('title', 'Sanctuary for Second Chances | Faith-Based Addiction Recovery')</title>
    <meta name="title" content="@yield('title', 'Sanctuary for Second Chances | Faith-Based Addiction Recovery')">
    <meta name="description" content="@yield('description', 'A spiritually guided, values-based recovery community offering addiction recovery, transitional housing, and compassionate support for individuals seeking healing, hope, and second chances.')">
    <meta name="keywords"
        content="Sanctuary for Second Chances, addiction recovery, faith-based recovery, women in recovery, 12-step recovery program, transitional housing, spiritual healing, recovery community Philippines">
    <meta name="author" content="Sanctuary for Second Chances">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4B5563">
    <meta name="format-detection" content="telephone=no">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Sanctuary for Second Chances | Healing, Recovery, and Transformation')">
    <meta property="og:description" content="@yield('description', 'A safe and spiritually guided recovery community helping individuals overcome addiction and compulsive behaviors through compassion, dignity, and transformation.')">
    <meta property="og:image" content="{{ asset('assets/images/og-sanctuary.jpg') }}">
    <meta property="og:site_name" content="Sanctuary for Second Chances">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Sanctuary for Second Chances | Recovery & Hope')">
    <meta name="twitter:description" content="@yield('description', 'A faith-based recovery community offering addiction recovery programs, transitional housing, and support services.')">
    <meta name="twitter:image" content="{{ asset('assets/images/og-sanctuary.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo-circle.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo-circle.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">

    <!-- Tailwind & Alpine -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <!-- Font Awesome SVG + JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/sankey.js"></script>
    <script src="https://code.highcharts.com/modules/organization.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>

<body 
    x-data="app"
    class="antialiased text-gray-800"
>


    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('app', () => ({
                darkHero: @json($page === 'sanctuary' ? true : false),
                scrolled: false,
                init() {
                    window.addEventListener('scroll', () => {
                        this.scrolled = window.scrollY > 20;
                    });
                }
            }));
        });
    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/sankey.js"></script>
    <script src="https://code.highcharts.com/modules/organization.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

</body>

</html>
