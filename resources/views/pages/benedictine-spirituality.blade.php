@extends('layouts.app')
@section('title', 'Benedictine Spirituality in Recovery')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <img src="{{ asset('assets/images/monastery-path.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="Benedictine Path to Recovery" />

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
                                    Benedictine Spirituality
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
                        The Rule of St. Benedict
                    </h2>
                    <p class="text-lg  leading-relaxed">
                        Written in the 6th century, the Rule of St. Benedict provides a "little rule for beginners" 
                        that mirrors the journey of recovery. It offers a balanced life of prayer, work, 
                        study, and community to heal the fractured self.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-start">
                    <div>
                        <h3 class="text-2xl font-semibold  mb-4">
                            Stability, Obedience, and Conversion
                        </h3>
                        <p class=" leading-relaxed mb-6">
                            For those in recovery, Benedictine spirituality offers "Stability"—the commitment 
                            to stay present even when it's painful—and "Conversatio Morum," the daily 
                            commitment to changing our ways and seeking a new life.
                        </p>
                        
                        
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-200">
                        <p class="text-lg text-slate-700 italic mb-4">
                            “Listen and attend with the ear of your heart. It is only when we are quiet 
                            enough to listen that we can hear the path to healing.”
                        </p>
                        <p class="text-sm font-semibold ">
                            — St. Benedict of Nursia
                        </p>
                        <p class="text-sm text-slate-500">
                            Prologue, The Rule
                        </p>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto text-center mb-14">
                    <h3 class="text-3xl font-bold  mb-4">
                        The 12 Degrees of Humility
                    </h3>
                    <p class=" leading-relaxed">
                        St. Benedict’s 12-step ladder of humility serves as a profound psychological 
                        map for surrendering the ego and overcoming the "self-will" that fuels addiction.
                    </p>
                </div>

                <div x-data="{
                        steps: [
                            'Fear of God and mindfulness of His presence in all things.',
                            'Surrender of self-will and personal desires for a higher purpose.',
                            'Obedience to a mentor or community to gain a broader perspective.',
                            'Endurance and patience when faced with difficulties or injustices.',
                            'Honest confession of shortcomings and hidden faults to another.',
                            'Acceptance of the lowest tasks and a spirit of contentment.',
                            'Believing and acknowledging that one is lower than others in spirit.',
                            'Adherence to the common rule of the community over personal impulse.',
                            'Practice of silence and restraint in speech.',
                            'Restraint from frivolous or excessive laughter.',
                            'Speaking gently, briefly, and with humble gravity.',
                            'Maintaining a humble posture and heart in all activities.'
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