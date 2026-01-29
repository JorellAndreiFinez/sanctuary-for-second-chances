@extends('layouts.app')
@section('title', '12 Promises of AA')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <img src="{{ asset('assets/images/pic-1.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="AA Big Book Promises" />

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
                                <h3 class=" text-xl font-semibold text-center sm:text-2xl  uppercase">
                                    The 12 Promises of AA
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
                        A Vision of Hope
                    </h2>
                    <p class="text-lg  leading-relaxed">
                        Founded in 1935, Alcoholics Anonymous has helped millions find freedom. 
                        The Promises outline a vision of peace, purpose, and connection that comes from 
                        working the Twelve Steps.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-start">
                    <div>
                        <h3 class="text-2xl font-semibold  mb-4">
                            What They Are and Why They Matter
                        </h3>
                        <p class=" leading-relaxed mb-6">
                            Found in Chapter 6 (Into Action) of the Big Book, these promises offer a clear, 
                            hopeful picture of what life in sobriety can feel like. If we are painstaking 
                            about this phase of our development, we will be amazed before we are halfway through.
                        </p>
                        
                        
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-200">
                        <p class="text-lg text-slate-700 italic mb-4">
                            “The Promises of AA often deliver what many call a ‘spiritual awakening of the educational variety.’ They speak directly to the regret, fear, and loneliness of addiction.”
                        </p>
                        <p class="text-sm font-semibold ">
                            — Alcoholics Anonymous
                        </p>
                        <p class="text-sm text-slate-500">
                            Chapter 6: Into Action
                        </p>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto text-center mb-14">
                    <h3 class="text-3xl font-bold  mb-4">
                        The 12 Promises of AA
                    </h3>
                    <p class=" leading-relaxed">
                        As quoted from the AA Big Book, these shifts represent the "New Freedom" 
                        experienced by members as they commit to the path of recovery.
                    </p>
                </div>

                <div x-data="{
                        steps: [
                            'We are going to know a new freedom and happiness.',
                            'We will not regret the past nor wish to shut the door on it.',
                            'We will comprehend the word serenity.',
                            'We will know peace.',
                            'No matter how far down the scale we have gone, we will see how our experience can benefit others.',
                            'That feeling of uselessness and self-pity will disappear.',
                            'We will lose interest in selfish things and gain interest in our fellows.',
                            'Self-seeking will slip away.',
                            'Our whole attitude and outlook on life will change.',
                            'Fear of people and economic insecurity will leave us.',
                            'We will intuitively know how to handle situations which used to baffle us.',
                            'We will suddenly realize that God is doing for us what we could not do for ourselves.'
                        ]
                    }" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                        <template x-for="(step, index) in steps" :key="index">
                            <div class="flex items-start gap-6">

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