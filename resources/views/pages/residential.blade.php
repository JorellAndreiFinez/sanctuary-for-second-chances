@extends('layouts.about')
@section('title', 'Programs - Residential Recovery ')

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
                                    Residential Recovery
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
                    <h2 class="text-3xl sm:text-4xl font-extrabold  tracking-tight">
                        Non-TC Transitional Housing for Recovery
                    </h2>
                    <p class="mt-4 text-lg text-primary-600 font-semibold">
                        Residential Recovery and Reintegration Pathway
                    </p>
                </div>

                <!-- Main Content -->
                <div class="space-y-8 text-gray-700 leading-relaxed text-lg">
                    <p>
                        The Residential Recovery and Reintergration Pathway is a values-based, non-clinical
                        addiction recovery program offered by The Sanctuary for Second Chances, Inc. Designed
                        for individuals seeking a safe and structured environment to rebuild their lives, this
                        program spans either 90 or 180 days, depending on personal needs and readiness.
                    </p>

                    <p>
                        This pathway is a non-therapeutic community (non-TC) model nor a clinical intervention.
                        Instead it uses its own Life Recovery Program—an evidence-informed, values-based recovery
                        curriculum—to provide residents with a structured foundation for personal growth,
                        accountability, and reintegration.
                    </p>

                    <div x-data="{ open: false }" class="mt-6 border border-gray-200 rounded-2xl overflow-hidden">
    
                    <!-- Header -->
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                        <p class="font-medium  text-left">
                            Participants are immersed in a supportive community where they can:
                        </p>
                        <svg class="w-5 h-5  transition-transform duration-300"
                            :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Content -->
                    <div x-show="open"
                        x-collapse
                        class="px-6 py-5 bg-white text-gray-700"
                        x-cloak>
                        <ol class="space-y-4 list-decimal list-inside pl-2">
                            <li>
                                Establish healthy habits and routines that promotes stability and self-discipline.
                            </li>
                            <li>
                                Engage in reflective spiritual exercises that nurture inner healing and purpose.
                            </li>
                            <li>
                                Build meaningful relationships through peer mentoring and group activities.
                            </li>
                            <li>
                                Learn practical life skills essentials for reintegration into family, work, and society.
                            </li>
                        </ol>
                    </div>
                </div>


                <!-- Who It's For -->
                <div class="mt-16 ">
                    <h4 class="text-2xl font-bold  mb-6">
                        Who This Program is For
                    </h4>

                    <div class="space-y-6 text-gray-700 leading-relaxed text-lg bg-gray-50 rounded-2xl p-8 sm:p-10 border border-gray-200">
                        <p>
                            This program is ideal for individuals who are medically stable, not in immediate
                            crisis, and free from any indicators of active psychosis. It is specifically designed
                            for those who are emotionally and behaviorally capable of engaging in structured
                            recovery activities without the need for psychiatric intervention.
                        </p>

                        <p>
                            Participants should demonstrate a readiness towards personal transformation and a
                            commitment to values such as dignity, accountability, and hope.
                        </p>

                        <p class="font-medium ">
                            Through this pathway, individuals are empowered to reclaim their lives, rebuild
                            healthy relationships, and reintegrate meaningfully with their families, work, and
                            communities—supported by a safe, non-TC, non-clinical environment.
                        </p>
                    </div>
                </div>

            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
