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
                                <h3 class=" text-xl font-semibold text-center sm:text-2xl  uppercase">
                                    12 Traditions Principle
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
                    <h2 class="text-4xl sm:text-5xl font-bold mb-6">
                        The Twelve Traditions
                    </h2>
                    <p class="text-lg leading-relaxed">
                        The Twelve Traditions provide guiding principles for how Alcoholics Anonymous
                        groups function, relate to one another, and engage with society at large.
                    </p>

                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-start">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">
                            The Purpose of the Twelve Traditions
                        </h3>
                        <p class="leading-relaxed mb-6">
                            The Twelve Traditions outline how A.A. groups maintain unity, independence,
                            and focus on their primary purpose. They address matters such as leadership,
                            group autonomy, finances, public relations, and anonymity.
                        </p>
                        <p class="leading-relaxed">
                            First published in April 1946 in the A.A. Grapevine under the title
                            <em>“Twelve Points to Assure Our Future,”</em> the Traditions help ensure that
                            Alcoholics Anonymous remains sustainable, inclusive, and free from outside
                            influence.
                        </p>

                    </div>

                    <!-- Quote Card -->
                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-200">
                        <p class="text-lg text-slate-700 italic mb-4">
                            “The Twelve Traditions serve as a framework for unity, reminding us that
                            personal recovery depends upon A.A. unity and the placing of principles
                            before personalities.”
                        </p>
                        <p class="text-sm font-semibold">
                            — Alcoholics Anonymous
                        </p>
                        <p class="text-sm text-slate-500">
                            A.A. Grapevine, 1946
                        </p>

                    </div>
                </div>

                <div class="max-w-3xl mx-auto text-center mb-14">
                    <h3 class="text-3xl font-bold mb-4">
                        The Twelve Traditions
                    </h3>
                    <p class="leading-relaxed">
                        The Traditions help guide relationships within A.A.—between groups, members,
                        the global Fellowship, and society. They emphasize unity, autonomy,
                        responsibility, and anonymity.
                    </p>

                </div>

                <div x-data="{
                        steps: [
                            'Our common welfare should come first; personal recovery depends upon A.A. unity.',
                            'For our group purpose there is but one ultimate authority—a loving God as He may express Himself in our group conscience. Our leaders are but trusted servants; they do not govern.',
                            'The only requirement for A.A. membership is a desire to stop drinking.',
                            'Each group should be autonomous except in matters affecting other groups or A.A. as a whole.',
                            'Each group has but one primary purpose—to carry its message to the alcoholic who still suffers.',
                            'An A.A. group ought never endorse, finance, or lend the A.A. name to any related facility or outside enterprise.',
                            'Every A.A. group ought to be fully self-supporting, declining outside contributions.',
                            'Alcoholics Anonymous should remain forever non-professional, but our service centers may employ special workers.',
                            'A.A., as such, ought never be organized; but we may create service boards or committees directly responsible to those they serve.',
                            'Alcoholics Anonymous has no opinion on outside issues; hence the A.A. name ought never be drawn into public controversy.',
                            'Our public relations policy is based on attraction rather than promotion; we maintain personal anonymity at the level of press, radio, and films.',
                            'Anonymity is the spiritual foundation of all our traditions, reminding us to place principles before personalities.'
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
