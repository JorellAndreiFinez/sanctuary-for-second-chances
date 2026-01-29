@extends('layouts.about')
@section('title', 'Programs - Non-Residential Recovery ')

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
                                <h3 class=" text-xl font-semibold text-center sm:text-2xl uppercase">
                                    Non-Residential
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
                        Flexible Recovery Support and Aftercare Monitoring (Non-Residential)
                    </h2>
                    <p class="mt-4 text-lg text-primary-600 font-semibold">
                        Community-Based Continuum of Care for Recovery Maintenance
                    </p>
                </div>

                <!-- Intro -->
                <div class="space-y-8 leading-relaxed text-lg">
                    <p>
                        Recovery does not end after completing a program—it is a lifelong journey of growth, resilience,
                        and support. At the Sanctuary for Second Chances, we recognize that each person's path is unique,
                        and ongoing connection to a recovery community can make all the difference in maintaining long-term
                        sobriety and well-being.
                    </p>

                    <p class="font-semibold">
                        This program is designed for:
                    </p>

                    <!-- FA2 Accordion List -->
                    <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                            <p class="font-medium text-left">
                                Target Participants
                            </p>
                            <svg class="w-5 h-5  transition-transform duration-300"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                            <ul class="space-y-4 list-disc list-inside pl-2">
                                <li>Non-residential participants who may not require a full-time program but still need
                                    structured support.</li>
                                <li>Program alumni who have completed the residential Life Recovery Program and want
                                    continued accountability and growth.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- What We Offer -->
                <div class="mt-16">
                    <h4 class="text-2xl font-bold mb-6">
                        What We Offer
                    </h4>

                    <div class="space-y-8 leading-relaxed text-lg mb-1">
                        <p>This non-residential track provides a continuum of care through:</p>
                    </div>
                    <div class="space-y-4 left-0 rounded-2xl leading-relaxed text-lg">

                        <!-- Values-Based Group Support -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Values-Based Group Support
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Safe peer-led sessions that encourage sharing, accountability, and encouragement.
                            </div>
                        </div>

                        <!-- Individual Recovery Coaching -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Individual Recovery Coaching
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                One-on-one sessions providing personalized guidance, accountability, and goal-setting.
                            </div>
                        </div>

                        <!-- Peer Mentoring -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Peer Mentoring
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Guidance and companionship from recovery coaches and mentors who have walked the same path.
                            </div>
                        </div>

                        <!-- Life Skills Reinforcement -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Life Skills Reinforcement
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Practical tools for daily living, from managing stress and finances to building healthy
                                relationships.
                            </div>
                        </div>

                        <!-- Structured Follow-Up -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Structured Follow-Up
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Regular check-ins to provide accountability and celebrate progress.
                            </div>
                        </div>

                        <!-- Relapse Prevention Planning -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Relapse Prevention Planning
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Identifying triggers, developing coping strategies, and strengthening resilience.
                            </div>
                        </div>

                        <!-- Reintegration Planning -->
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-4 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Reintegration Planning
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-4 bg-white " x-cloak>
                                Helping participants return to family, community, education, or employment with confidence.
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Why It Matters -->
                <div class="my-16">
                    <h4 class="text-2xl font-bold mb-6">
                        Why It Matters
                    </h4>

                    <div class="space-y-6  leading-relaxed text-lg bg-gray-50 p-8 sm:p-10 rounded-2xl border border-gray-200">
                        <p>
                            Recovery flourishes when people stay connected. This program bridges the gap between structured
                            residential recovery and full community reintegration, ensuring no one has to walk the journey
                            alone. Participants often experience:
                        </p>

                        <ul class="space-y-4 list-disc list-inside pl-4">
                            <li>Lower relapse risk through consistent support.</li>
                            <li>A stronger sense of belonging and accountability.</li>
                            <li>Greater confidence in handling life's challenges.</li>
                            <li>Hope renewed through connection with others in recovery.</li>
                        </ul>
                    </div>
                </div>

                <!-- Our Approach -->
                <div class="mt-16">
                    <h4 class="text-2xl font-bold mb-6">
                        Our Approach
                    </h4>

                    <div
                        class="space-y-6 leading-relaxed text-lg bg-gray-50 p-8 sm:p-10 rounded-2xl border border-gray-200">
                        <p>
                            Unlike clinical aftercare programs, our model is values-driven, community-based, and
                            non-clinical.
                            We walk with participants as peers and mentors, offering a safe, compassionate, and structured
                            space
                            for growth—without stigma or judgment.
                        </p>
                    </div>
                </div>

            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
