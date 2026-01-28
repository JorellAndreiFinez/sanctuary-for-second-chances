@extends('layouts.app')
@section('title', 'Contact Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <!-- Background Image -->
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="Contact Us Background" />

            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Content -->
            <div class="relative flex flex-col items-center justify-center h-full px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white uppercase tracking-wide mb-4">
                    Contact Us
                </h1>
                <p class="text-gray-200 max-w-2xl sm:text-lg lg:text-xl">
                    We are here to answer your questions and support your journey. Reach out to us and we’ll get back to you
                    as soon as possible.
                </p>


            </div>

            <!-- Bottom SVG curve -->
            <svg class="absolute inset-x-0 -bottom-1 text-[--bg-color]" viewBox="0 0 1160 163">
                <path fill="currentColor"
                    d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                </path>
            </svg>
        </header>

    </main>

    <main class="px-4 sm:px-6 lg:px-8 py-16 max-w-7xl mx-auto">

        <!-- Page Heading -->
        <h1 class="cardo text-4xl sm:text-5xl font-bold mb-12 text-center">
            Contact Us
        </h1>

        <!-- Google Maps Section -->
        <section class="mb-16">
            <div class="rounded-xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4185.441570302552!2d120.7559694!3d14.186944899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd877afaa91ff7%3A0x1d32118373e5a678!2sSanctuary%20for%20Second%20Chances!5e1!3m2!1sen!2sph!4v1756195162588!5m2!1sen!2sph"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    class="w-full h-[350px] sm:h-[400px]">
                </iframe>
            </div>
            
        </section>

        <!-- Connect With Us Section -->
        <section class="mb-16 text-center">
            <h2 class="cardo text-3xl sm:text-4xl font-bold text-[var(--accent-color)] mb-8">
                Connect With Us
            </h2>
            <ul class="flex flex-col sm:flex-row justify-center gap-6">

                <!-- Facebook -->
                <li>
                    <a href="https://www.facebook.com/sanctuaryforsecondchances" target="_blank"
                        class="hind flex items-center gap-2 text-[var(--text-color)] font-medium hover:text-[var(--primary-color)] transition-[var(--transition-fast)]">
                        <ion-icon name="logo-facebook" class="text-[var(--accent-color)] text-xl"></ion-icon>
                        Facebook Page
                    </a>
                </li>

                <!-- Instagram -->
                <li>
                    <a href="https://www.instagram.com/sanctuaryforsecondchances" target="_blank"
                        class="hind flex items-center gap-2 text-[var(--text-color)] font-medium hover:text-[var(--primary-color)] transition-[var(--transition-fast)]">
                        <ion-icon name="logo-instagram" class="text-[var(--accent-color)] text-xl"></ion-icon>
                        Instagram
                    </a>
                </li>

                <!-- LinkedIn -->
                <li>
                    <a href="https://www.linkedin.com/company/sanctuaryforsecondchances" target="_blank"
                        class="hind flex items-center gap-2 text-[var(--text-color)] font-medium hover:text-[var(--primary-color)] transition-[var(--transition-fast)]">
                        <ion-icon name="logo-linkedin" class="text-[var(--accent-color)] text-xl"></ion-icon>
                        LinkedIn
                    </a>
                </li>

                <!-- Email -->
                <li>
                    <a href="mailto:info@sanctuaryforsecondchances.org"
                        class="hind flex items-center gap-2 text-[var(--text-color)] font-medium hover:text-[var(--primary-color)] transition-[var(--transition-fast)]">
                        <ion-icon name="mail-outline" class="text-[var(--accent-color)] text-xl"></ion-icon>
                        Email Us
                    </a>
                </li>
            </ul>
        </section>


    </main>


@endsection

@section('scripts')
@endsection
