@extends('layouts.about')
@section('title', 'Programs - Family Support')

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
                                <h3 class=" text-xl font-semibold sm:text-2xl text-center uppercase">
                                    Family Support
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
                        Family Support Sessions
                    </h2>
                    <p class="mt-4 text-lg text-primary-600 font-semibold">
                        Healing and Reconnection for Families Affected by Addiction
                    </p>
                </div>

                <!-- Intro -->
                <div class="space-y-8 text-gray-700 leading-relaxed text-lg">
                    <p>
                        Addiction and compulsive behaviors don’t only affect the individual—they impact the entire family.
                        At The Sanctuary for Second Chances, Inc., we believe that true recovery happens in the context of
                        relationships, where wounds can be healed, trust can be rebuilt, and hope can be restored.
                    </p>

                    <p class="font-semibold">
                        Family Support Sessions provide a safe and supportive space for families to:
                    </p>

                    <!-- FA2 Accordion List -->
                    <div x-data="{ open: false }" class="border border-gray-200 rounded-2xl overflow-hidden">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                            <p class="font-medium  text-left">
                                Key Benefits for Families:
                            </p>
                            <svg class="w-5 h-5 text-gray-500 transition-transform duration-300"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="open" x-collapse class="px-6 py-5 bg-white text-gray-700" x-cloak>
                            <ul class="space-y-4 list-disc list-inside pl-2">
                                <li>
                                    Learn about addiction, recovery, and co-dependency from a clear, value-based,
                                    evidence-informed, and non-clinical perspective.
                                </li>
                                <li>
                                    Practice healthy communication that strengthens connection while respecting boundaries.
                                </li>
                                <li>
                                    Understand the role of family in recovery—how to support without enabling, and how to
                                    heal together.
                                </li>
                                <li>
                                    Rebuild trust and relationships damaged by the cycle of addiction.
                                </li>
                                <li>
                                    Find hope and resilience as a family system moving forward.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Why It Matters -->
                <div class="my-16">
                    <h4 class="text-2xl font-bold  mb-6">
                        Why It Matters
                    </h4>

                    <div class="space-y-6 text-gray-700 leading-relaxed text-lg">
                        <p>
                            Recovery is not just an individual journey—it is a shared path of healing. Families who
                            participate in support sessions often find:
                        </p>

                        <div x-data="{ open: false }" class="mt-4 border border-gray-200 rounded-2xl overflow-hidden">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between px-6 py-5 bg-gray-50 hover:bg-gray-100 transition">
                                <p class="font-medium  text-left">
                                    Key Takeaways:
                                </p>
                                <svg class="w-5 h-5 text-gray-500 transition-transform duration-300"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="open" x-collapse class="px-6 py-5 bg-white text-gray-700" x-cloak>
                                <ul class="space-y-4 list-disc list-inside pl-2">
                                    <li>Reduced conflict and misunderstanding.</li>
                                    <li>Stronger communication and emotional resilience.</li>
                                    <li>Renewed hope for healthy, lasting relationships.</li>
                                </ul>
                                <p class="mt-4 font-medium ">
                                    At the Sanctuary for Second Chances, we walk alongside families—not as clinicians, but
                                    as partners in healing—offering a space where honesty, compassion, and faith in renewal
                                    can take root.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What Families Can Expect -->
                <div class="mt-16">
                    <h4 class="text-2xl font-bold  mb-6">
                        What Families Can Expect
                    </h4>

                    <div class="space-y-6 bg-gray-50 p-8 rounded-2xl  sm:p-10 border border-gray-200 text-gray-700 leading-relaxed text-lg">
                        <p>
                            These facilitated sessions are guided by our trained recovery coaches and family support
                            facilitators.
                            Through structured discussions, reflection activities, and guided exercises, families will:
                        </p>

                        <ul class="space-y-4 list-disc list-inside pl-2">
                            <li>Gain insights into how addiction impacts family dynamics.</li>
                            <li>Identify and set healthy boundaries that protect both the person in recovery and loved ones.
                            </li>
                            <li>Explore practical tools for forgiveness, reconciliation, and moving forward.</li>
                            <li>Experience a values-driven approach rooted in compassion, dignity, and respect.</li>
                        </ul>
                    </div>
                </div>


            </div>
        </section>


    </main>

@endsection

@section('scripts')

@endsection
