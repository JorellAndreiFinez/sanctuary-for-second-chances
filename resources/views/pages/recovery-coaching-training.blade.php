@extends('layouts.about')
@section('title', 'Programs - Recovery Coaching Training')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <!-- Background image -->
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="" />

            <!-- Overlay + SVG -->
            <div class="relative bg-black bg-opacity-50 h-full">
                <!-- Bottom SVG curve -->
                <svg class="absolute inset-x-0 -bottom-1 text-[--bg-color]" viewBox="0 0 1160 163">
                    <path fill="currentColor"
                        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                    </path>
                </svg>

                <!-- Content -->
                <div
                    class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 h-full flex items-center">
                    <div class="flex flex-col items-center justify-between xl:flex-row w-full">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                            <!-- Left empty or optional content -->
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <h3 class=" text-xl font-semibold sm:text-center sm:text-2xl md:text-center uppercase">
                                    Recovery Coaching Training
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-20">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="mb-12 text-center">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        Recovery Coaching and Life Skills Training
                    </h2>
                    <p class="mt-4 text-lg text-primary-600 font-semibold">
                        Capacity Building for Peer Support and Sustainable Recovery
                    </p>
                </div>

                <!-- Intro -->
                <div class="space-y-8  leading-relaxed text-lg">
                    <p>
                        At the Sanctuary for Second Chances, we believe recovery is strengthened when people in the
                        community are
                        equipped to guide, mentor, and walk alongside others. Our Recovery Coaching and Life Skills Training
                        program
                        is designed to build a strong network of empowered peer coaches, facilitators, and volunteers who
                        embody values-driven recovery support.
                    </p>

                    <h4 class="text-2xl font-bold mb-4">What We Offer</h4>
                    <p class="font-semibold">
                        Our training program equips participants with the knowledge, tools, and lived-experience wisdom
                        needed to serve as effective recovery companions. It includes:
                    </p>

                    <!-- FA2 Accordion List for Key Offerings -->
                    <div class="space-y-4">
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Foundations of Recovery Coaching
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Principles of effective peer support, motivational interviewing techniques, active
                                listening, and boundary-setting.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Values-Driven Support
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Practicing dignity, compassion, and accountability as cornerstones of sustainable recovery.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Ethics and Best Practices
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Applying ethical guidelines, confidentiality standards, and integrity in peer relationships.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Trauma-Informed Care
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Understanding the impact of trauma on recovery and responding with sensitivity, resilience,
                                and safety.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Relapse Prevention Tools
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Evidence-informed strategies for identifying triggers, building coping skills, and
                                sustaining progress.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Evidence-Informed Recovery Planning
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Applying best practices and lived-experience wisdom to create practical, sustainable
                                recovery pathways, integrating the Sanctuary's holistic, non-clinical framework.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Life Skills Training
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Practical reinforcement of everyday competencies: stress management, communication,
                                financial stewardship, and healthy relationships.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Mentorship and Practicum
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Hands-on, supervised learning experiences to build confidence and real-world skills.
                            </div>
                        </div>
                    </div>

                    <div class="mt-16">
                        <h4 class="text-2xl font-bold mb-6">
                            Our Approach
                        </h4>
                        <div
                            class="space-y-6 leading-relaxed text-lg bg-gray-50 p-8 sm:p-10 rounded-2xl border border-gray-200">
                            <p class=" text-lg leading-relaxed">
                                This program is not a clinical certification. Instead, it is values-based,
                                evidence-informed,
                                and
                                community-centered, designed to train recovery companions who walk alongside others with
                                empathy,
                                responsibility, and hope—rooted in the Sanctuary for Second Chances' unique framework for
                                life
                                recovery.
                            </p>
                        </div>

                    </div>


                </div>
            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
