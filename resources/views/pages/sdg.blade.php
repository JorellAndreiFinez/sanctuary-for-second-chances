@extends('layouts.about')
@section('title', 'About - Sustainable Development Goals')

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
                                <img src="{{ asset('assets/images/elements/mission-vision.svg') }}" alt=""
                                    class="w-20 h-20 mx-auto mb-4">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl uppercase">
                                    Sustainable Development Goals
                                </h3>
                                <p class="text-sm text-gray-600 sm:text-sm">
                                    The work is aligned with the United Nations Sustainable Development Goals by addressing
                                    health, well-being, social inclusion, and reduced inequalities. Through recovery-focused
                                    support, education, and reintegration efforts, individuals are empowered to rebuild
                                    their lives while contributing positively to their families and communities.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-16 bg-gradient-to-b from-gray-50 via-white to-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Content -->
                <div class="items-center">
                    <div class="space-y-8">
                        <h3 class="text-3xl sm:text-4xl font-semibold text-primary-600">Alignment with United Nations
                            Sustainable Goals</h3>
                        <p class=" leading-relaxed text-lg">
                            The Sanctuary for Second Chances, Inc. is a non-profit, non-government organization dedicated to
                            advancing the United Nations Sustainable Development Goals—particularly Goal 3: Good Health and
                            Well-Being and Goal 17: Partnerships for the Goals.
                        </p>
                        <p class=" leading-relaxed text-lg">
                            We believe that recovery is not only about overcoming addiction, but about restoring dignity,
                            rebuilding lives, and reconnecting with community. That is why our programs emphasize holistic
                            healing and reintegration, offering open-door, non-lock-up, retreat-like recovery experiences
                            that nurture the mind, body, and spirit.
                        </p>
                        <p class=" leading-relaxed text-lg">
                            Unlike conventional therapeutic communities or clinical lock-up facilities, our recovery center
                            provides a safe, values-based environment where residents can heal while enjoying the serenity
                            of rural life, regular recreation and renewal (RNR), outdoor activities, and participation in
                            12-Step-aligned fellowships and peer support groups.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=" py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold sm:text-4xl">Our Commitment to Health and Partnerships</h2>
                    <p class="mt-4  max-w-2xl mx-auto">
                        Advancing Sustainable Development Goals through recovery, advocacy, and collaboration.
                    </p>
                </div>

                <!-- Content Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Card 1: Health & Recovery -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/sdg3.png') }}" alt="SDG 3 Icon" class="h-12 w-12 mr-4">
                            <h3 class="text-xl font-semibold text-primary-600">SDG #3: Good Health and Well-Being</h3>
                        </div>
                        <p class=" leading-relaxed">
                            In line with SDG #3 (Good Health and Well-Being), we serve individuals struggling with
                            substance-use disorders, gambling addiction, co-dependency, and other compulsive behaviors,
                            guiding them toward sustainable transformation.
                        </p>
                    </div>

                    <!-- Card 2: Partnerships & Community -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/sdg17.png') }}" alt="SDG 17 Icon" class="h-12 w-12 mr-4">
                            <h3 class="text-xl font-semibold text-primary-600">SDG #17: Partnerships for the Goals</h3>
                        </div>
                        <p class=" leading-relaxed">
                            At the same time, through SDG #17 (Partnerships for the Goals), we actively collaborate with
                            families, communities, faith-based organizations, civic groups, and government institutions. Our
                            application for accreditation as a PDEA Partner NGO under the Drug Demand Reduction Program is
                            also underway, reinforcing our commitment to stigma-reduction, advocacy, and long-term community
                            impact.
                        </p>
                    </div>
                </div>

                <!-- Bottom Statement -->
                <div class="mt-12 text-center">
                    <p class="text-gray-800 text-lg font-medium">
                        At The Sanctuary for Second Chances, Inc., we are committed to promoting well-being through
                        recovery—sustained by partnerships.
                    </p>
                </div>
            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
