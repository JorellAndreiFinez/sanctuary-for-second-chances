@extends('layouts.about')
@section('title', 'Programs - Psychoeducational Awareness ')

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
                                    Psychoeducational Awareness
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-16">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="mb-12 text-center">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        Understanding Addiction: Awareness and Education
                    </h2>
                    <p class="mt-4 text-lg text-primary-600 font-semibold">
                        Advocacy and Prevention Through Community Engagement
                    </p>
                </div>

                <div class="space-y-8  leading-relaxed text-lg">
                    <p>
                        At the Sanctuary for Second Chances, we believe that awareness is the first step toward prevention
                        and healing.
                        Our Understanding Addiction program is designed to help communities, schools, and families gain a
                        deeper perspective
                        on the realities of addiction, co-dependency, and the pathways to recovery.
                    </p>

                    <p>
                        We deliver evidence-informed, values-based education that breaks stigma and fosters compassion.
                        Through engaging formats—such as school and community symposia, public talks, interactive workshops,
                        print and digital resources, and collaborative partnerships with civic and faith-based
                        organizations—we empower people to become advocates of hope and change.
                    </p>

                    <p class="font-semibold">
                        Topics include:
                    </p>

                    <!-- FA2 Accordion List for Topics -->
                    <div class="space-y-4">
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    The Science and Lived Experience of Addiction
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Explore the biological, psychological, and social aspects of addiction, including lived
                                experiences and recovery journeys.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Co-Dependency and its Impact on Families
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Understanding how addiction affects family dynamics, boundaries, and emotional health.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Stigma Reduction
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Strategies to challenge misconceptions, promote empathy, and create a supportive environment
                                for recovery.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Early Prevention Strategies for Youth
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Teaching practical skills and knowledge to reduce risk behaviors and promote healthy
                                decision-making.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Building Resilience through Values and Life Skills
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Strengthening coping mechanisms, values, and life skills to promote sustainable recovery and
                                well-being.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Supporting Recovery in Community and Faith Settings
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300" :class="{ 'rotate-180': open }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Practical guidance to foster supportive networks, mentorship, and community advocacy for
                                recovery.
                            </div>
                        </div>
                    </div>

                    <!-- Closing Statement -->
                    <p class="mt-8  text-lg leading-relaxed">
                        Our goal is to equip communities with knowledge and tools to prevent substance abuse and compulsive
                        behaviors, while promoting supportive environments for those in recovery.
                    </p>

                </div>
            </div>
        </section>



    </main>

@endsection

@section('scripts')

@endsection
