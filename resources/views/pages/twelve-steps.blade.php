@extends('layouts.app')
@section('title', '12-Steps Principle')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="" />

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
                                    12 Steps Principle
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">

                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-bold  mb-6">
                        12-Step Programs
                    </h2>
                    <p class="text-lg  leading-relaxed">
                        One of the most established and trusted recovery frameworks, the 12-Step
                        model has helped millions achieve sobriety and long-term recovery.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-start">
                    <div>
                        <h3 class="text-2xl font-semibold  mb-4">
                            The Purpose of the 12 Steps
                        </h3>
                        <p class=" leading-relaxed mb-6">
                            Originally developed by the founders of Alcoholics Anonymous, the 12 Steps
                            provide guiding principles for overcoming addiction. Their early success
                            led many recovery groups to adapt the framework for various substance and
                            behavioral addictions.
                        </p>
                        <p class=" leading-relaxed">
                            While rooted in spiritual concepts, the program is inclusive and flexible.
                            Participants are encouraged to define a higher power in their own way,
                            making the program meaningful for people of diverse beliefs.
                        </p>
                    </div>

                    <!-- Quote Card -->
                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-200">
                        <p class="text-lg text-slate-700 italic mb-4">
                            “12-step programs help individuals who suffer from alcohol and other
                            substance use disorders overcome addiction, achieve sobriety, and
                            maintain sustained recovery.”
                        </p>
                        <p class="text-sm font-semibold ">
                            — Ashish Bhatt, MD
                        </p>
                        <p class="text-sm text-slate-500">
                            Doctor of Addiction Medicine
                        </p>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto text-center mb-14">
                    <h3 class="text-3xl font-bold  mb-4">
                        The 12 Steps of Alcoholics Anonymous
                    </h3>
                    <p class=" leading-relaxed">
                        Recovery is a lifelong process. Many participants revisit steps over time,
                        often practicing multiple steps simultaneously. Steps 1–3 are considered
                        the foundation and are commonly practiced daily.
                    </p>
                </div>

                <div x-data="{
                        steps: [
                            'We admitted we were powerless over alcohol—that our lives had become unmanageable.',
                            'Came to believe that a Power greater than ourselves could restore us to sanity.',
                            'Made a decision to turn our will and our lives over to the care of God as we understood Him.',
                            'Made a searching and fearless moral inventory of ourselves.',
                            'Admitted to God, to ourselves, and to another human being the exact nature of our wrongs.',
                            'Were entirely ready to have God remove all these defects of character.',
                            'Humbly asked Him to remove our shortcomings.',
                            'Made a list of persons we had harmed and became willing to make amends to them all.',
                            'Made direct amends wherever possible, except when doing so would cause harm.',
                            'Continued to take personal inventory and promptly admitted when we were wrong.',
                            'Sought through prayer and meditation to improve our conscious contact with God.',
                            'Having had a spiritual awakening, we carried this message and practiced these principles.'
                        ]
                    }" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                        <template x-for="(step, index) in steps" :key="index">
                            <div class="flex items-start gap-6">

                            <!-- Big Number -->
                            <div class="flex-shrink-0">
                                <span class="text-5xl font-bold leading-none"
                                    style="
                                            font-family: var(--font-heading);
                                            color: var(--secondary-color);
                                        "
                                    x-text="String(index + 1).padStart(2, '0')"></span>
                            </div>

                            <div>
                                <p class="text-sm leading-relaxed"
                                    style="
                        font-family: var(--font-body);
                        color: var(--hover-color);
                    "
                                    x-text="step"></p>
                            </div>

                        </div>
                    </template>
                </div>



            </div>
        </section>


    </main>

@endsection

@section('scripts')
@endsection
