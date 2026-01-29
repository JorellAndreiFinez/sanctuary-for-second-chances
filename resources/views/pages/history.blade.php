@extends('layouts.about')
@section('title', 'About - History')

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
                                <h3 class=" text-xl font-semibold text-center sm:text-2xl  uppercase">
                                    History
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class=" py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">The History of the Sanctuary for Second
                        Chances</h2>
                    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Our journey began with hope, healing, and the unwavering
                        mission to provide second chances.</p>
                </div>

                <!-- Timeline container -->
                <div class="relative">
                    <!-- Center vertical line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gray-300 hidden md:block"></div>

                    <div class="space-y-12">
                        <!-- Item 1 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 md:text-right">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        The Sanctuary for Second Chances, Inc. was born from a deeply personal journey of
                                        grief, healing, and unwavering hope.
                                    </p>
                                </div>
                            </div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8 hidden md:block"></div>
                        </div>

                        <!-- Item 2 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 hidden md:block"></div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        Its visionary and founder, Ruth, began her path toward addiction recovery advocacy
                                        not as a counselor or professional—but as someone who knew the pain of
                                        co-dependency, and later, chemical dependency. When her husband passed away, Ruth
                                        struggled in her grieving process and turned to substances in search of relief. But
                                        grace met her in the midst of her brokenness. She was gently invited to attend
                                        Alcoholics Anonymous and Narcotics Anonymous meetings held within the grounds of the
                                        Cathedral of the Archdiocese of Cagayan de Oro. That simple invitation began a
                                        lifelong journey of healing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 md:text-right">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        Embracing recovery fully, Ruth soon became instrumental in co-founding CDO – Pathway
                                        to Recovery Foundation, a rehabilitation initiative in Northern Mindanao. When she
                                        relocated to Metro Manila with her family, she carried her advocacy
                                        forward—accompanying others on their path to sobriety, offering support and hope
                                        wherever she could.
                                    </p>
                                </div>
                            </div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8 hidden md:block"></div>
                        </div>

                        <!-- Item 4 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 hidden md:block"></div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        For years, Ruth envisioned building a non-profit facility that could serve as a
                                        place of refuge and renewal—for women. In 2024, and again in April 2025, this dream
                                        resurfaced more urgently. She expressed a clear desire for the name to include the
                                        word “Sanctuary”. Inspired by her vision, her son began drafting the Articles of
                                        Incorporation and By-laws for a non-profit. It was during this process that the name
                                        "Sanctuary for Second Chances" emerged.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 md:text-right">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        Soon after, in May 2025, Ruth approached her children with a humble and heartfelt
                                        request: a woman and friend in recovery—who had recently relapsed, escaped from her
                                        previous rehabilitation center, and was now facing homelessness—was in urgent need
                                        of shelter. The friend's own family, deeply affected by her repeated poor decisions,
                                        had chosen to enforce tough love as a consequence, withdrawing support to encourage
                                        accountability and change. With nowhere to go and only a recovery friend pledging a
                                        small monthly allowance, Ruth offered to take her in and personally guide her
                                        through recovery. Though Ruth's family had valid concerns about boundaries and
                                        privacy, they recognized the urgency of the situation and the sincerity of the
                                        mission.
                                    </p>
                                </div>
                            </div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8 hidden md:block"></div>
                        </div>

                        <!-- Item 6 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 hidden md:block"></div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        Ruth and her son, Felix, visited a trusted couple in Cavite on May 19, 2025, to
                                        share the vision of establishing a recovery house. The ideal location was their rest
                                        house in Magallanes, but given the urgency, they inquired about a more accessible
                                        nearby property. By Divine Providence, despite having no funds for security deposits
                                        or advance rent—only the promise of retroactive payments—the couple responded with
                                        generosity. They handed over the keys to a vacant apartment and gave their full
                                        blessing.
                                    </p>
                                    <p class="mt-4 leading-relaxed">
                                        Just two days later, on May 21, 2025, Ruth opened the doors of that apartment as a
                                        temporary recovery shelter—a seed that would soon grow into The Sanctuary for Second
                                        Chances, Inc.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="md:w-5/12 md:pr-8 md:text-right">
                                <div class="bg-white shadow-lg rounded-lg p-6">
                                    <p class="leading-relaxed">
                                        In the days that followed, Ruth and Felix prayerfully invited a small circle of
                                        trusted individuals—kindred spirits and passionate advocates for healing and second
                                        chances—to become the Founding Incorporators and Trustees. These individuals
                                        responded with unwavering commitment and gave their own fiat, helping formalize the
                                        dream into a duly registered non-stock, non-profit, non-government organization.
                                    </p>
                                    <p class="mt-4 leading-relaxed">
                                        What began with one woman in need, one family’s act of faith, and one friend’s quiet
                                        generosity gave birth to The Sanctuary for Second Chances, Inc.—not merely as a
                                        place, but as a mission: to walk with the wounded, to offer hope to the hopeless,
                                        and to open doors again and again for healing, dignity, and life-giving
                                        transformation.
                                    </p>
                                </div>
                            </div>
                            <div class="md:w-2/12 flex justify-center relative z-10">
                                <div class="w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                            </div>
                            <div class="md:w-5/12 md:pl-8 hidden md:block"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

@section('scripts')

@endsection
