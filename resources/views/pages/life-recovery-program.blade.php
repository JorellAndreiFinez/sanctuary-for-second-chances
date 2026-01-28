@extends('layouts.app')
@section('title', 'Life Recovery Program')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main>
        <header class="relative h-[500px] lg:h-[600px]">
            <img src="{{ asset('assets/images/life-recovery-bible.webp') }}" class="absolute inset-0 w-full h-full object-cover"
                alt="Life Recovery and Biblical Principles" />

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
                                    The Life Recovery Program
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
                        Biblical Foundations for Healing
                    </h2>
                    <p class="text-lg  leading-relaxed">
                        The Life Recovery Program is based on the belief that the 12 Steps are not just 
                        self-help tools, but are deeply rooted in the Bible. By connecting the steps to 
                        Scripture, we find the strength to overcome addiction through a relationship with Jesus Christ.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-start">
                    <div>
                        <h3 class="text-2xl font-semibold  mb-4">
                            Recovery Through God's Word
                        </h3>
                        <p class=" leading-relaxed mb-6">
                            Life Recovery focuses on the "Higher Power" specifically as God. It provides a 
                            roadmap for those seeking to align their sobriety journey with their faith, 
                            using the 12 Steps as a bridge back to a healthy spiritual and emotional life.
                        </p>
                        
                        
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-200">
                        <p class="text-lg text-slate-700 italic mb-4">
                            “God is the source of all recovery. When we admit our powerlessness and 
                            turn to Him, we find a grace that is sufficient for every struggle.”
                        </p>
                        <p class="text-sm font-semibold ">
                            — Stephen Arterburn & David Stoop
                        </p>
                        <p class="text-sm text-slate-500">
                            Founders of Life Recovery
                        </p>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto text-center mb-14">
                    <h3 class="text-3xl font-bold  mb-4">
                        The 12 Steps of Life Recovery
                    </h3>
                    <p class=" leading-relaxed">
                        These steps integrate traditional recovery wisdom with Biblical truth, 
                        providing a path from brokenness to wholeness in Christ.
                    </p>
                </div>

                <div x-data="{
                        steps: [
                            'We admitted we were powerless over our problems—that our lives had become unmanageable.',
                            'Came to believe that God could restore us to sanity.',
                            'Made a decision to turn our will and our lives over to the care of God.',
                            'Made a searching and fearless moral inventory of ourselves.',
                            'Admitted to God, to ourselves, and to another human being the exact nature of our wrongs.',
                            'Were entirely ready to have God remove all these defects of character.',
                            'Humbly asked God to remove our shortcomings.',
                            'Made a list of all persons we had harmed and became willing to make amends to them all.',
                            'Made direct amends to such people whenever possible, except when to do so would injure them or others.',
                            'Continued to take personal inventory and when we were wrong, promptly admitted it.',
                            'Sought through prayer and meditation to improve our conscious contact with God, praying only for knowledge of His will for us and the power to carry that out.',
                            'Having had a spiritual awakening as the result of these steps, we tried to carry this message to others and to practice these principles in all our affairs.'
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