<nav x-data="{
    scrolled: false,
    darkHero: {{ request()->routeIs('about.sanctuary') ? 'true' : 'false' }}
}" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled
        ?
        'bg-primary-color shadow-lg sticky top-0' :
        'bg-[--bg-color]'"
    class="my-nav fixed w-full z-50 backdrop-blur-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16 items-center">

            <a href="/" class="flex items-center">
                <img class="h-12 w-auto rounded-xl" src="{{ asset('assets/images/logo-transparent.png') }}"
                    alt="Sanctuary Logo">
            </a>

            <div class="hidden md:flex space-x-8 items-center">
                <a href="/" class="text-white font-normal hover:text-secondary-color transition">Home</a>

                <div x-data="{ open: false }" class="relative">
                    <button @mouseover="open = true" @mouseleave="open = false"
                        class="text-white font-normal hover:text-secondary-color transition flex items-center gap-1">
                        About Us
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-52 bg-white rounded-xl shadow-xl border border-gray-200 py-2 z-50"
                        @mouseover="open = true" @mouseleave="open = false" x-cloak>

                        <a href="{{ route('about.sanctuary') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Sanctuary for Second Chances
                        </a>

                        <a href="{{ route('about.mission') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Mission, Vision & Core Values
                        </a>

                        <a href="{{ route('about.history') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            History
                        </a>

                        <a href="{{ route('about.board-of-trustees') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Board of Trustees
                        </a>

                        <a href="{{ route('about.sdg') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Sustainable Development Goals
                        </a>
                    </div>
                </div>

                <a href="{{ route('get-help') }}" class="text-white font-normal hover:text-secondary-color transition">Get Help</a>

                <div x-data="{ open: false }" class="relative" @mouseenter="open = true" @mouseleave="open = false">

                    <button
                        class="text-white font-normal hover:text-secondary-color transition flex items-center gap-1">
                        Programs & Services
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-200 py-2 z-50"
                        x-cloak>

                        <a href="{{ route('programs.residential') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Residential
                        </a>

                        <a href="{{ route('programs.family-support') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Family Support
                        </a>

                        <a href="{{ route('programs.non-residential') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Non-Residential
                        </a>

                        <a href="{{ route('programs.recovery-coaching-training') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Recovery Coaching Training
                        </a>

                        <a href="{{ route('programs.psychoeducational-awareness') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Psychoeducational Awareness
                        </a>

                        <a href="{{ route('programs.disease-of-addiction') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Disease of Addiction
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative" @mouseenter="open = true" @mouseleave="open = false">

                    <button
                        class="text-white font-normal hover:text-secondary-color transition flex items-center gap-1">
                        Addiction Recovery
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-200 py-2 z-50"
                        x-cloak>

                        <a href="{{ route('recovery.twelve-steps') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            12 Steps Principle
                        </a>

                        <a href="{{ route('recovery.twelve-traditions') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            12 Traditions
                        </a>

                        <a href="{{ route('recovery.twelve-promises') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            12 Promises
                        </a>

                        <a href="{{ route('recovery.benedictine-spirituality') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Benedictine Spirituality
                        </a>

                        <a href="{{ route('recovery.life-recovery-program') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            Life Recovery Program
                        </a>
                    </div>
                </div>

                <!-- Support & Serve Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @mouseover="open = true" @mouseleave="open = false"
                        class="text-white font-normal hover:text-secondary-color transition flex items-center gap-1">
                        Support & Serve
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-52 bg-white rounded-xl shadow-xl border border-gray-200 py-2 z-50"
                        x-cloak>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">Volunteer</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">Donate</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">Fundraising</a>
                    </div>
                </div>

                <a href="{{ route('contact-us') }}"
                    class="text-white font-normal hover:text-secondary-color transition">Contact Us</a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="mobileOpen = !mobileOpen" x-data="{ mobileOpen: false }"
                    class="text-white hover:text-secondary-color focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div x-show="mobileOpen" x-transition
                    class="absolute top-full left-0 w-full bg-primary-color shadow-lg md:hidden" x-cloak>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-secondary-color">About Us</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-secondary-color">Get Help</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-secondary-color">Programs &
                        Services</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-secondary-color">Support & Serve</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-secondary-color">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
</nav>
