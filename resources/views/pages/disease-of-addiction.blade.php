@extends('layouts.about')
@section('title', 'Programs - Disease of Addiction')

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
                                    Disease of Addiction
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
                        Position Statement on the Use of the Disease Concept of Addiction and Spiritual Anchors
                    </h2>
                </div>

                <!-- Intro -->
                <div class="space-y-8  leading-relaxed text-lg">
                    <p>
                        The Sanctuary for Second Chances, Inc. affirms that it operates a structured, non-medical,
                        non-psychiatric,
                        and non-clinical transitional housing and recovery support program. While the initial service focus
                        of its residency
                        program is women, its Life Recovery Program is intentionally designed to serve both men and women in
                        recovery through
                        residential, individual recovery coaching, community-based implementation, or partnership-based
                        outreach.
                    </p>

                    <p>
                        The Life Recovery Program follows a values-based, trauma-informed, evidence-informed, and
                        person-centered approach
                        emphasizing life skills development, moral formation, reflective practice, and peer support. It does
                        not provide
                        medical treatment, psychiatric care, or therapeutic intervention.
                    </p>

                    <p>
                        As a core part of its psychoeducational framework, the Life Recovery Program includes a required,
                        non-clinical presentation
                        of the Disease Concept of Addiction. This framework is not introduced as a medical diagnosis, but as
                        a transformational
                        lens to help participants better understand their struggles with substance use, codependency, or
                        other compulsive behaviors.
                        <br> <br>
                        <span class="font-semibold">Its inclusion is intended to:</span>
                    </p>

                    <!-- Key Intentions Accordion -->
                    <div class="space-y-4">
                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Reduce Shame and Stigma
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Presenting addiction as a condition with behavioral, emotional, and spiritual dimensions—not
                                merely a moral failing.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Encourage Self-Awareness and Accountability
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Supporting accountability and reflection without applying medical labels or clinical
                                classifications.
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium text-left">
                                    Provide a Bridge to Community-Based Recovery Groups
                                </p>
                                <svg class="w-5 h-5  transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="px-6 py-5 bg-white " x-cloak>
                                Offering language that supports peer connection and mutual support, including groups like
                                AA, NA, and Al-Anon.
                            </div>
                        </div>
                    </div>

                    <p>
                        The Disease Concept of Addiction is intentionally presented in accessible, non-medical language, and
                        is not used as a clinical or diagnostic tool, but as an essential recovery tool for understanding
                        the chronic, progressive, and multi-dimensional nature of addiction. Participants are expected to
                        actively engage with this framework as part of their recovery journey.
                    </p>

                    <p>
                        The program does not conduct medical or psychological assessments, does not employ licensed
                        clinicians for treatment, and does not offer services requiring Department of Health (DOH) licensing
                        or therapeutic certification. Instead, it provides a spiritually integrated, community-based
                        recovery environment that supports men and women seeking to rebuild their lives with dignity and
                        purpose.
                    </p>

                    <p>
                        While not required to operate under DOH regulation, The Sanctuary for Second Chances, Inc.
                        integrates the qualified oversight of a DOH-Accredited Rehabilitation Practitioner as its Program
                        Director. This reflects its commitment to ethical alignment with national recovery standards, while
                        maintaining its non-medical, non-psychiatric, values-based identity.
                    </p>

                    <div class="mt-16">
                        <h4 class="text-2xl font-bold">
                        Optional Spiritual Anchors in the Program
                        </p>

                       <div
                        class="space-y-6 mt-5 leading-relaxed text-lg bg-gray-50 p-2 sm:p-4 rounded-2xl border border-gray-200 font-normal">
                            <ul class="space-y-2 list-disc list-inside pl-5  text-lg">
                            <li>The Bible</li>
                            <li>The Rule of St. Benedict</li>
                            <li>The 12 Steps and 12 Traditions</li>
                        </ul>
                        </div>
                    </div>

                    <p>
                        These spiritual anchors provide language and imagery for reflection on universal human experiences
                        such as surrender, growth, humility, forgiveness, and hope. They are never imposed, and participants
                        are encouraged to engage freely or draw from their own spiritual or moral traditions.
                    </p>

                    <p>
                        Facilitators and Recovery Coaches are trained to present both the Disease Concept of Addiction and
                        spiritual anchors with emotional sensitivity, cultural respect, and openness to diverse belief
                        systems. Recovery Coaches serve as trained companions, not clinicians—offering presence,
                        accountability, and encouragement through confidential conversations tailored to each individual’s
                        journey.
                    </p>

                    <p>
                        The Life Recovery Program maintains alignment with standards for non-medical, non-psychiatric, and
                        non-clinical transitional housing and community-based recovery support programs as outlined by the
                        Department of Social Welfare and Development (DSWD). The program responsibly integrates the Disease
                        Concept of Addiction and optional spiritual anchors as educational and reflective tools, not as
                        clinical or therapeutic interventions.
                    </p>

                </div>
            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
