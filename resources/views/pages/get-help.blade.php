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
                                    Need help?
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section
            class="relative bg-gradient-to-br from-[--accent-color] to-[--accent-color]/70 text-white overflow-hidden py-32">
            {{-- Abstract floating shapes --}}
            <div class="absolute -top-16 -left-16 w-60 h-60 bg-white/10 rounded-full blur-3xl animate-blob"></div>
            <div
                class="absolute -bottom-20 -right-24 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-blob animation-delay-2000">
            </div>

            <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">The Sanctuary for Second
                    Chances</h1>
                <p class="text-lg md:text-xl text-white/90 mb-12 max-w-3xl mx-auto">A safe haven for those seeking freedom
                    from addiction. Guidance, support, and hope are available to anyone who reaches out.</p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="tel:09602336216"
                        class="bg-white  rounded-full px-8 py-4 font-semibold shadow-lg hover:scale-105 transition-transform">
                        📞 Call
                    </a>
                    <a href="https://wa.me/639602336216" target="_blank"
                        class="bg-white rounded-full px-8 py-4 font-semibold shadow-lg hover:scale-105 transition-transform">
                        💬 WhatsApp
                    </a>
                </div>
            </div>
        </section>

        {{-- Section 2: Creative Hotline Display --}}
        <section class="relative bg-[--bg-color] py-24 overflow-hidden">
            {{-- Layered shapes --}}
            <div
                class="absolute -top-10 -left-16 w-40 h-40 bg-[--accent-color]/5 rounded-full blur-2xl animate-blob animation-delay-1000">
            </div>
            <div
                class="absolute -bottom-16 -right-20 w-72 h-72 bg-[--accent-color]/10 rounded-full blur-3xl animate-blob animation-delay-3000">
            </div>

            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold  mb-12 text-center">Philippine Hotlines & Resources</h2>

                <div class="grid gap-12 lg:grid-cols-2">
                    {{-- Card style 1: Floating asymmetric --}}
                    <div
                        class="bg-white rounded-3xl shadow-lg p-12 relative overflow-hidden group hover:scale-[1.03] transition-transform">
                        <div
                            class="absolute -top-12 -right-12 w-36 h-36 bg-[--accent-color]/10 rounded-full group-hover:bg-[--accent-color]/20 transition-all">
                        </div>
                        <h3 class="text-2xl font-bold  mb-3">Philippine Red Cross</h3>
                        <p class="text-[--text-color]/90 mb-4">24/7 counseling & referral services for mental health and
                            substance abuse.</p>
                        <p class="label-minimal">Hotline:</p>
                        <p class="phone-link mt-2"><a href="tel:143" class="phone-link">143 (Nationwide)</a></p>
                        <a href="https://www.redcross.org.ph/" target="_blank"
                            class="text-[--secondary-color] font-semibold hover:underline mt-4 block">Visit Website</a>
                    </div>

                    <div
                        class="bg-white rounded-3xl shadow-lg p-12 relative overflow-hidden group hover:scale-[1.03] transition-transform">
                        <div
                            class="absolute -top-12 -left-12 w-36 h-36 bg-[--accent-color]/10 rounded-full group-hover:bg-[--accent-color]/20 transition-all">
                        </div>
                        <h3 class="text-2xl font-bold  mb-3">Dangerous Drugs Board</h3>
                        <p class="text-[--text-color]/90 mb-4">Government programs for prevention, intervention &
                            rehabilitation.</p>
                        <p class="label-minimal">Contact:</p>
                        <p class="phone-link mt-2"><a href="tel:+6328185291" class="phone-link">+63 2 8185-291</a></p>
                        <a href="https://www.ddb.gov.ph/" target="_blank"
                            class="text-[--secondary-color] font-semibold hover:underline mt-4 block">Visit Website</a>
                    </div>

                    <div
                        class="bg-white rounded-3xl shadow-lg p-12 relative overflow-hidden group hover:scale-[1.03] transition-transform">
                        <div
                            class="absolute -bottom-12 -right-12 w-40 h-40 bg-[--accent-color]/10 rounded-full group-hover:bg-[--accent-color]/20 transition-all">
                        </div>
                        <h3 class="text-2xl font-bold  mb-3">Project Double Barrel</h3>
                        <p class="text-[--text-color]/90 mb-4">Community-based rehabilitation & family support for substance
                            abuse cases.</p>
                        <p class="label-minimal">Hotline:</p>
                        <p class="phone-link mt-2"><a href="tel:+6328725322" class="phone-link">+63 2 8725-322</a></p>
                        <a href="https://www.dbb.gov.ph" target="_blank"
                            class="text-[--secondary-color] font-semibold hover:underline mt-4 block">Visit Website</a>
                    </div>

                    <div
                        class="bg-white rounded-3xl shadow-lg p-12 relative overflow-hidden group hover:scale-[1.03] transition-transform">
                        <div
                            class="absolute -bottom-12 -left-12 w-40 h-40 bg-[--accent-color]/10 rounded-full group-hover:bg-[--accent-color]/20 transition-all">
                        </div>
                        <h3 class="text-2xl font-bold  mb-3">NCADD Philippines</h3>
                        <p class="text-[--text-color]/90 mb-4">Education & referral services for individuals & families
                            struggling with addiction.</p>
                        <p class="label-minimal">Hotline:</p>
                        <p class="phone-link mt-2"><a href="tel:+6328899789" class="phone-link">+63 2 8899-789</a></p>
                        <a href="https://www.ncaddphilippines.org" target="_blank"
                            class="text-[--secondary-color] font-semibold hover:underline mt-4 block">Visit Website</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Floating Contact Buttons --}}
        <div class="fixed bottom-6 right-6 flex flex-col gap-4 z-50">
            <a href="tel:09602336216"
                class="bg-[--accent-color] text-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                📞
            </a>
            <a href="https://wa.me/639602336216" target="_blank"
                class="bg-green-500 text-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                💬
            </a>
        </div>

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
