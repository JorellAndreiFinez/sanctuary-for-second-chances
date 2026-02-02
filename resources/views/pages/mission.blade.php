@extends('layouts.about')
@section('title', 'About - Our Mission, Vision, & Core Values')

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
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12 mx-auto">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10 text-center">
                                <img src="{{ asset('assets/images/elements/mission-vision.svg') }}" alt="" class="w-20 h-20 mx-auto mb-4">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl uppercase">
                                    Our Mission, Vision, & Core Values
                                </h3>
                                <p class="text-sm text-gray-600 sm:text-sm">
                                    The Sanctuary for Second Chances, Inc. is a non-profit, non-government organization
                                    (CSO/NGO) dedicated to addiction recovery, stigma-reduction, and sustainable
                                    reintegration. We believe recovery should feel like healing—not punishment. That is why
                                    we operate as a non-TC, non-lock-up, open doors addiction recovery center, where
                                    individuals are treated with dignity, compassion, and trust.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="relative py-20 bg-[--bg-color]">
            <div class="max-w-5xl mx-auto px-6 grid gap-12">
                <div class="text-center">
                    <h2
                        class="text-4xl md:text-5xl font-extrabold text-[--text-color] mb-4 font-[--font-heading] relative inline-block">
                        <span class="relative z-10">Mission</span>
                        <span class="absolute -bottom-2 left-5 w-30 h-1 bg-[--primary-color] rounded-full"></span>
                        <span
                            class="absolute -bottom-2 left-5 transform -translate-x-1/2 translate-y-1 w-3 h-3 bg-[--accent-color] rounded-full"></span>
                    </h2>

                    <p class="text-[--hover-color] text-lg md:text-xl max-w-3xl mx-auto font-[--font-body]">
                        Healing is a process of unlearning harm and rebuilding self-worth. Support is offered through compassion, structure, and accountability, allowing individuals to move beyond addiction and destructive patterns. The goal is not just sobriety, but stability, purpose, and reintegration into everyday life.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-start hover:shadow-2xl transition-shadow duration-[--transition-medium]">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-[--primary-color] text-[--text-color] rounded-full mb-4 font-bold">
                            1
                        </div>
                        <h3 class="text-xl font-semibold text-[--text-color]  mb-2 font-[--font-heading]">Spiritual
                            Reflection</h3>
                        <p class="text-[--hover-color] font-[--font-body]">
                            Grounding each individual in self-awareness, meditation, and meaningful reflection to foster
                            inner growth.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-start hover:shadow-2xl transition-shadow duration-[--transition-medium]">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-[--primary-color] text-[--text-color] rounded-full mb-4 font-bold">
                            2
                        </div>
                        <h3 class="text-xl font-semibold text-[--text-color]  mb-2 font-[--font-heading]">Supportive
                            Fellowship</h3>
                        <p class="text-[--hover-color] font-[--font-body]">
                            Building a safe community of peers to walk alongside participants in their recovery journey.
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-start hover:shadow-2xl transition-shadow duration-[--transition-medium]">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-[--primary-color] text-[--text-color] rounded-full mb-4 font-bold">
                            3
                        </div>
                        <h3 class="text-xl font-semibold text-[--text-color]  mb-2 font-[--font-heading]">Principles
                            Inspired by the Twelve Steps</h3>
                        <p class="text-[--hover-color] font-[--font-body]">
                            Guiding principles that emphasize accountability, personal growth, and long-term transformation.
                        </p>
                    </div>
                </div>

                <!-- Bottom Summary Card -->
                <div class="mt-1 bg-[--text-color] rounded-3xl p-10 shadow-2xl text-center">
                    <p class="text-[--primary-color] text-lg md:text-xl font-[--font-body]">
                        We create a sanctuary where lives are renewed, hope is restored, and dignity is honored—apart from
                        clinical or medical interventions.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20 bg-[--bg-color]">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <!-- Section Title -->
                <h2
                    class="text-4xl md:text-5xl font-extrabold text-[--text-color] mb-6 font-[--font-heading] relative inline-block">
                    <span class="relative z-10">Our Vision</span>
                    <!-- Decorative underline -->
                    <span
                        class="absolute -bottom-2 left-60 transform -translate-x-1/2 w-34 h-1 bg-[--primary-color] rounded-full"></span>
                    <span
                        class="absolute -bottom-2 left-60 transform -translate-x-1/2 translate-y-1 w-3 h-3 bg-[--text-color] rounded-full"></span>
                </h2>

                <p class="mt-6 text-lg md:text-xl text-[--hover-color] max-w-3xl mx-auto leading-relaxed">
                    We envision a compassionate and spiritually grounded community where individuals in recovery rediscover
                    their purpose, rebuild their lives with integrity, and live with hope, resilience, and meaningful
                    connection – free from the grip of addiction and compulsive behaviors.
                </p>

                <div class="mt-12 flex flex-col md:flex-row justify-center gap-6">
                    <div class="flex-1 bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-[--transition-medium]">
                        <h3 class="text-xl font-semibold text-[--text-color] mb-2">Hope</h3>
                        <p class="text-[--hover-color]">Rebuilding lives with renewed purpose and optimism.</p>
                    </div>
                    <div class="flex-1 bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-[--transition-medium]">
                        <h3 class="text-xl font-semibold text-[--text-color] mb-2">Resilience</h3>
                        <p class="text-[--hover-color]">Empowering individuals to face challenges with strength.</p>
                    </div>
                    <div class="flex-1 bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-[--transition-medium]">
                        <h3 class="text-xl font-semibold text-[--text-color] mb-2">Connection</h3>
                        <p class="text-[--hover-color]">Building meaningful bonds and supportive communities.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-[--bg-color]">
            <div class="max-w-6xl mx-auto px-6" x-data="{
                values: [
                    { title: 'Compassion', desc: 'We meet each person with empathy and respect.' },
                    { title: 'Integrity', desc: 'We promote honesty, accountability, and ethical action.' },
                    { title: 'Transformation', desc: 'We believe change is possible, one step and story at a time.' },
                    { title: 'Community', desc: 'We thrive together in connection, not isolation.' },
                    { title: 'Empowerment', desc: 'We build dignity through skills, purpose, and belief in self—supporting a life that is substance-free, sober, and grounded in personal growth.' },
                    { title: 'Faith & Hope', desc: 'We honor the journey of each individual and their capacity to rise again.' }
                ]
            }">

                <!-- Section Title -->
                <h2
                    class="text-4xl md:text-5xl font-extrabold text-[--text-color] mb-12 text-center font-[--font-heading] relative inline-block">
                    <span class="relative z-10">Our Core Values</span>
                    <span
                        class="absolute -bottom-2 left-90 transform -translate-x-1/2 w-65 h-1 bg-[--primary-color] rounded-full"></span>
                    <span
                        class="absolute -bottom-2 left-90 transform -translate-x-1/2 translate-y-1 w-3 h-3 bg-[--text-color] rounded-full"></span>
                </h2>

                <!-- Values Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="(value, index) in values" :key="index">
                        <div
                            class="relative p-6 rounded-3xl bg-white shadow-md hover:shadow-xl hover:scale-105 transition-[--transition-medium]">
                            <!-- Accent circle -->
                            <div
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 rounded-full bg-[--primary-color]">
                            </div>
                            <h3 class="text-[--text-color] font-semibold text-xl mb-2 text-center" x-text="value.title">
                            </h3>
                            <p class="text-[--hover-color] text-center text-sm" x-text="value.desc"></p>
                        </div>
                    </template>
                </div>

            </div>
        </section>

    </main>

@endsection

@section('scripts')

@endsection
