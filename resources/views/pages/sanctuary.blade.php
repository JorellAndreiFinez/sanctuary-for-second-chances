@extends('layouts.about')
@section('title', 'About - The Sanctuary for Second Chances')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <div class="relative">
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 object-cover w-full h-full"
                alt="" />
            <div class="relative bg-opacity-50 bg-black">
                <svg class="absolute inset-x-0 -bottom-1 text-[--bg-color]" viewBox="0 0 1160 163">
                    <path fill="currentColor"
                        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                    </path>
                </svg>
                <div
                    class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">

                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl uppercase">
                                    The Sanctuary for Second Chances
                                </h3>
                                <p class="text-xs text-gray-600 sm:text-sm">
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
        </div>

        <section class="relative py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Heading -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                        Our Location – Cavite’s Hidden Refuge for Recovery
                    </h2>

                    <p class="mt-6 text-lg md:text-xl leading-relaxed">
                        We are based in the peaceful town of Magallanes, Cavite, a community known for its agricultural
                        heritage and warm hospitality. Just a few minutes away from Tagaytay City and less than two hours
                        from Metro Manila, our center offers both accessibility and serenity.
                    </p>

                </div>

                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text -->
                    <div class="space-y-6">
                        <p class="text-gray-700">
                            Our location provides an ideal setting for individuals seeking recovery—far enough from the
                            distractions of the city, yet close enough for family support and reintegration planning.
                            Surrounded by fresh air, greenery, and the simplicity of rural life, the Sanctuary feels more
                            like a retreat or vacation home than a traditional rehabilitation facility.
                        </p>
                        <p class="text-gray-700">
                            We focus on an <span class="font-semibold">open-doors environment</span>, where participants can
                            reflect, learn, and grow at their own pace. This approach reduces fear and resistance, making
                            addiction recovery a <span class="font-semibold">positive, hopeful experience</span>—something
                            to look forward to rather than endure.
                        </p>
                        <p class="text-gray-700">
                            Whether you are a participant, family member, or visitor, the Sanctuary’s location encourages
                            peace, mindfulness, and connection with nature—all essential ingredients for lasting recovery.
                        </p>
                    </div>

                    <!-- Google Map Embed -->
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4543.042474900004!2d120.75339447575847!3d14.186944886251872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd877afaa91ff7%3A0x1d32118373e5a678!2sSanctuary%20for%20Second%20Chances!5e1!3m2!1sen!2sph!4v1769268128085!5m2!1sen!2sph"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-16 py-16">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                    Our Role in National Advocacy
                </h2>
                <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto">
                    Advancing recovery and community resilience, we are proud to pursue accreditation as a <span
                        class="font-semibold">PDEA-Accredited Partner NGO</span> under the Drug Demand Reduction Program.
                    This partnership reflects our commitment to national healing and holistic support.
                </p>

                <div class="mt-12 grid md:grid-cols-3 gap-8 text-left">
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Drug Demand Reduction</h3>
                        <p class="text-gray-600">
                            Through values-driven education, prevention initiatives, and recovery support, we aim to reduce
                            the demand for illegal drugs and foster healthier communities.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Stigma Reduction</h3>
                        <p class="text-gray-600">
                            We equip families, schools, churches, and communities to welcome individuals in recovery as
                            valuable members of society, promoting acceptance and compassion.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Inclusive Recovery</h3>
                        <p class="text-gray-600">
                            Addressing gambling addiction, co-dependency, and compulsive behaviors, our recovery framework
                            ensures support for diverse struggles in a compassionate, inclusive manner.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-16 py-16 relative" x-data="{
            cards: [
                { title: 'Holistic, Non-Clinical Approach', description: 'Integrating values-based recovery, spiritual grounding, life-skills training, and evidence-informed practices into a seamless, personalized framework.', icon: '<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-8 w-8 text-primary\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 8c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM12 14c-4 0-8 2-8 6h16c0-4-4-6-8-6z\' /></svg>' },
                { title: 'Beyond Substance Use', description: 'Programs addressing gambling addiction, co-dependency, and compulsive behaviors alongside chemical dependency.', icon: '<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-8 w-8 text-primary\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M3 10h2l1 2 1-2h2m4 0h2l1 2 1-2h2\' /></svg>' },
                { title: 'Family-Centered Healing', description: 'Healing Together: Family Support Sessions to strengthen communication, boundaries, and reconciliation.', icon: '<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-8 w-8 text-primary\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z\' /></svg>' },
                { title: 'Community Connection', description: 'Values-based groups, peer mentoring, life-skills reinforcement, and recovery coaching for reintegration.', icon: '<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-8 w-8 text-primary\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M16 7a4 4 0 110 8 4 4 0 010-8zM4 15v1a2 2 0 002 2h12a2 2 0 002-2v-1\' /></svg>' },
                { title: 'Multi-Track Recovery Support', description: 'Tailored programs for substance use, gambling, co-dependency, and compulsive behaviors.', icon: '<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-8 w-8 text-primary\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 0h6\' /></svg>' }
            ]
        }">
            <div class="absolute top-4 left-0 w-full h-1"
                style="
            background-image: repeating-linear-gradient(
                to right,
                var(--text-color) 0,
                var(--text-color) 40px,
                transparent 40px,
                transparent 80px
            );
            border-radius: 9999px;
        ">
            </div>

            <div class="max-w-6xl mx-auto px-6 text-center relative mt-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">What Makes Us Different</h2>
                <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto">
                    Our approach blends evidence-informed recovery planning with compassionate peer support, ensuring every
                    participant is seen as a whole person—not defined by struggles, but strengthened by their courage to
                    heal.
                </p>

                <div class="mt-12 grid md:grid-cols-3 gap-10 justify-items-center">
                    <template x-for="(card, index) in cards.slice(0,3)" :key="index">
                        <div
                            class="flex flex-col items-center space-y-4 max-w-xs text-center p-5 rounded-2xl bg-[--text-color]">
                            <div class="p-4 bg-[--primary-color] bg-opacity-10 rounded-xl inline-flex items-center justify-center"
                                x-html="card.icon"></div>
                            <h3 class="text-xl font-semibold text-[--primary-color]" x-text="card.title"></h3>
                            <p class="text-[--bg-color]" x-text="card.description"></p>
                        </div>
                    </template>
                </div>

                <div class="mt-10 flex justify-center gap-10">
                    <template x-for="(card, index) in cards.slice(3)" :key="index">
                        <div
                            class="flex flex-col items-center space-y-4 max-w-xs text-center p-5 rounded-2xl bg-[--text-color]">
                            <div class="p-4 bg-[--primary-color] bg-opacity-10 rounded-xl inline-flex items-center justify-center"
                                x-html="card.icon"></div>
                            <h3 class="text-xl font-semibold text-[--primary-color]" x-text="card.title"></h3>
                            <p class="text-[--bg-color]" x-text="card.description"></p>
                        </div>
                    </template>
                </div>
            </div>

            <div class="absolute left-0 w-full h-1 -bottom-16"
                style="
            background-image: repeating-linear-gradient(
                to right,
                var(--text-color) 0,
                var(--text-color) 40px,
                transparent 40px,
                transparent 80px
            );
            border-radius: 9999px;
        ">
            </div>
        </section>

        <section class="mt-16 py-20 bg-gray-50 relative">

            <div class="max-w-5xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                    Program Features
                </h2>
                <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto">
                    Experience a recovery journey designed to empower, connect, and sustain growth for every participant.
                </p>

                <!-- Timeline style -->
                <div class="mt-16 relative">
                    <!-- Vertical line for timeline on large screens -->
                    <div
                        class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-primary">
                    </div>

                    <!-- Features -->
                    <div class="space-y-16">
                        <!-- Feature 1 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 text-right md:pr-12">
                                <h3 class="text-2xl font-semibold text-gray-900">Open-Doors Recovery</h3>
                                <p class="mt-2 text-gray-600">
                                    A welcoming, non-restrictive environment that builds trust, dignity, and belonging.
                                </p>
                            </div>
                            <div
                                class="mx-auto w-6 h-6 bg-primary rounded-full border-4 border-white md:relative md:left-1/2 transform -translate-x-1/2">
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="md:flex md:items-center md:justify-between md:flex-row-reverse">
                            <div class="md:w-5/12 text-left md:pl-12">
                                <h3 class="text-2xl font-semibold text-gray-900">Regular RNR</h3>
                                <p class="mt-2 text-gray-600">
                                    Balanced time for relaxation, fun outdoor activities, and community bonding.
                                </p>
                            </div>
                            <div
                                class="mx-auto w-6 h-6 bg-primary rounded-full border-4 border-white md:relative md:right-1/2 transform translate-x-1/2">
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 text-right md:pr-12">
                                <h3 class="text-2xl font-semibold text-gray-900">12-Step Integration</h3>
                                <p class="mt-2 text-gray-600">
                                    Participation in 12-step aligned fellowships and support group meetings for shared
                                    wisdom and guidance.
                                </p>
                            </div>
                            <div
                                class="mx-auto w-6 h-6 bg-primary rounded-full border-4 border-white md:relative md:left-1/2 transform -translate-x-1/2">
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="md:flex md:items-center md:justify-between md:flex-row-reverse">
                            <div class="md:w-5/12 text-left md:pl-12">
                                <h3 class="text-2xl font-semibold text-gray-900">Aftercare & Follow-Up</h3>
                                <p class="mt-2 text-gray-600">
                                    Structured monitoring, relapse prevention, and reintegration planning for alumni and
                                    community-based participants.
                                </p>
                            </div>
                            <div
                                class="mx-auto w-6 h-6 bg-primary rounded-full border-4 border-white md:relative md:right-1/2 transform translate-x-1/2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-16 py-20 bg-primary">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold">
                    Learn More About Our Purpose
                </h2>
                <p class="mt-4 text-lg md:text-xl text-[--text-color] max-w-2xl mx-auto">
                    Discover the driving mission and inspiring vision that guide everything we do at the Sanctuary for
                    Second Chances.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-6">
                    <a href="/mission"
                        class="px-8 py-4 bg-white text-primary font-semibold rounded-xl shadow-lg hover:bg-gray-100 transition">
                        Our Mission
                    </a>
                    <a href="/vision"
                        class="px-8 py-4 border border-white font-semibold rounded-xl hover:bg-white hover:text-primary transition">
                        Our Vision
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection

@section('scripts')

@endsection
