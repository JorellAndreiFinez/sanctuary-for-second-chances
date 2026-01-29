@extends('layouts.app')
@section('title', 'Get Help | The Sanctuary for Second Chances')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
    <style>
        .contact-grid-item {
            border-bottom: 1px solid rgba(71, 47, 12, 0.1);
            padding: 4rem 0;
            transition: var(--transition-medium);
        }

        .contact-grid-item:last-child {
            border-bottom: none;
        }

        .label-minimal {
            font-family: var(--font-body);
            color: var(--secondary-color);
            letter-spacing: 0.2em;
            font-weight: 700;
        }

        .phone-link {
            font-family: var(--font-heading);
            color: var(--text-color);
            transition: var(--transition-fast);
            display: inline-block;
        }

        .phone-link:hover {
            color: var(--secondary-color);
            transform: translateX(10px);
        }
    </style>
@endsection

@section('content')

    <main class="bg-[--bg-color]">
        <header class="relative h-[500px] lg:h-[600px]">
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="AA Big Book Promises" />

            <div class="relative bg-black bg-opacity-50 h-full">
                <svg class="absolute inset-x-0 -bottom-1 text-[--bg-color]" viewBox="0 0 1160 163">
                    <path fill="currentColor"
                        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                    </path>
                </svg>

                <div
                    class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 h-full flex items-center">
                    <div class="flex flex-col items-center justify-between xl:flex-row w-full">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <h3 class=" text-xl font-semibold sm:text-center sm:text-2xl md:text-center uppercase">
                                    Get Help
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section class="relative py-16">
            <div class="max-w-6xl mx-auto px-4 text-center">

                <h1
                    class="font-[--font-heading] text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    The Sanctuary for<br class="hidden sm:block">
                    Second Chances
                </h1>

                <p class="font-[--font-body] text-lg md:text-xl max-w-3xl mx-auto mb-12 opacity-90">
                    A safe haven for those seeking freedom from addiction.
                    Compassionate guidance, real support, and hope for lasting recovery.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:09602336216"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-full
                      bg-[--accent-color] text-white font-semibold
                      hover:bg-[--hover-color]
                      transition-all duration-300">
                        Call Us
                    </a>

                    <a href="https://wa.me/639602336216" target="_blank"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-full
                      border border-[--accent-color]
                       font-semibold
                      hover:bg-[--accent-color] hover:text-white
                      transition-all duration-300">
                        WhatsApp
                    </a>
                </div>

            </div>
        </section>

        <section class="relative py-16 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-start">

                    <!-- Left: Statement -->
                    <div class="space-y-6">
                        <span class="uppercase tracking-widest text-sm ">
                            Guidance
                        </span>

                        <h2 class="cardo text-5xl font-bold leading-tight ">
                            When you’re not sure<br class="hidden sm:block">
                            what to do next
                        </h2>

                        <p class="text-lg  max-w-xl">
                            Feeling lost doesn’t mean you’ve failed. It usually means you’ve reached
                            a moment where something new is trying to begin.
                        </p>

                        <p class=" max-w-xl">
                            This space isn’t about fixing you. It’s about offering quiet direction,
                            practical insight, and options you can return to whenever you need.
                        </p>
                    </div>

                    <!-- Right: Guidance Blocks -->
                    <div class="space-y-10">

                        <div class="border-l-4 border-[--primary-color] pl-6">
                            <h3 class="text-xl font-semibold mb-2">
                                Read, don’t rush
                            </h3>
                            <p class="">
                                Short guides meant to be absorbed slowly. No pressure to finish,
                                no expectations—just clarity, one idea at a time.
                            </p>
                        </div>

                        <div class="border-l-4 border-gray-300 pl-6">
                            <h3 class="text-xl font-semibold mb-2">
                                Small decisions matter
                            </h3>
                            <p class="">
                                Big change rarely arrives all at once. We focus on the small,
                                repeatable choices that quietly rebuild momentum.
                            </p>
                        </div>

                        <div class="border-l-4 border-gray-200 pl-6">
                            <h3 class="text-xl font-semibold mb-2">
                                Support looks different for everyone
                            </h3>
                            <p class="">
                                Some people need structure. Others need listening. We help you
                                identify what kind of help actually works for you.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4">

                <header class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="font-[--font-heading] text-3xl md:text-4xl font-bold  mb-4">
                        Philippine Hotlines & Resources
                    </h2>
                    <p class="font-[--font-body] text-lg opacity-80">
                        Trusted organizations offering support, counseling, and rehabilitation services across the country.
                    </p>
                </header>

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-2">

                    <!-- Card -->
                    <div class="bg-white rounded-2xl border border-black/5 p-8 hover:border-[--accent-color]/30 transition">
                        <h3 class="text-xl font-semibold  mb-3">
                            Philippine Red Cross
                        </h3>
                        <p class="text-[--text-color] opacity-80 mb-6">
                            24/7 counseling & referral services for mental health and substance abuse.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="tel:143"
                                class="font-semibold hover: transition">
                                143 (Nationwide)
                            </a>
                            <a href="https://www.redcross.org.ph/" target="_blank"
                                class="text-sm font-semibold text-[--secondary-color] hover:underline">
                                Website →
                            </a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl border border-black/5 p-8 hover:border-[--accent-color]/30 transition">
                        <h3 class="text-xl font-semibold  mb-3">
                            Dangerous Drugs Board
                        </h3>
                        <p class="text-[--text-color] opacity-80 mb-6">
                            Government programs for prevention, intervention, and rehabilitation.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="tel:+6328185291"
                                class="font-semibold hover: transition">
                                +63 2 8185-291
                            </a>
                            <a href="https://www.ddb.gov.ph/" target="_blank"
                                class="text-sm font-semibold text-[--secondary-color] hover:underline">
                                Website →
                            </a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl border border-black/5 p-8 hover:border-[--accent-color]/30 transition">
                        <h3 class="text-xl font-semibold  mb-3">
                            Project Double Barrel
                        </h3>
                        <p class="text-[--text-color] opacity-80 mb-6">
                            Community-based rehabilitation and family support programs.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="tel:+6328725322"
                                class="font-semibold hover: transition">
                                +63 2 8725-322
                            </a>
                            <a href="https://www.dbb.gov.ph" target="_blank"
                                class="text-sm font-semibold text-[--secondary-color] hover:underline">
                                Website →
                            </a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl border border-black/5 p-8 hover:border-[--accent-color]/30 transition">
                        <h3 class="text-xl font-semibold  mb-3">
                            NCADD Philippines
                        </h3>
                        <p class="text-[--text-color] opacity-80 mb-6">
                            Education and referral services for individuals and families.
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="tel:+6328899789"
                                class="font-semibold hover: transition">
                                +63 2 8899-789
                            </a>
                            <a href="https://www.ncaddphilippines.org" target="_blank"
                                class="text-sm font-semibold text-[--secondary-color] hover:underline">
                                Website →
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- Animations --}}
        <style>
            @keyframes blob {

                0%,
                100% {
                    transform: translate(0px, 0px) scale(1);
                }

                33% {
                    transform: translate(15px, -10px) scale(1.05);
                }

                66% {
                    transform: translate(-10px, 10px) scale(0.95);
                }
            }

            .animate-blob {
                animation: blob 8s infinite;
            }

            .animation-delay-1000 {
                animation-delay: 1s;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }

            .animation-delay-3000 {
                animation-delay: 3s;
            }
        </style>


    </main>

@endsection
