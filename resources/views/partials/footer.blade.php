<footer class="bg-linear-to-r from-gray-100 via-[--primary-color] to-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">

        <!-- Top Section -->
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">

            <!-- Brand / Logo -->
            <div class="text-center lg:text-left">
                <div class="flex justify-center lg:justify-start">
                    <img
                        src="{{ asset('assets/images/nav-logo-transparent.png') }}"
                        class="h-16 w-auto"
                        alt="logo"
                    />
                </div>

                <p class="max-w-sm mx-auto lg:mx-0 mt-4 text-sm text-gray-600">
                    The Sanctuary for Second Chances, Inc. is a non-profit, non-government organization (CSO/NGO) dedicated to addiction recovery, stigma-reduction, and sustainable reintegration. 
                </p>

                <!-- Social Icons -->
                <div class="flex justify-center lg:justify-start mt-6 space-x-6 text-gray-600">
                    <!-- Facebook -->
                    <a class="hover:opacity-75" href="#" target="_blank" rel="noreferrer">
                        <span class="sr-only">Facebook</span>
                        <!-- SVG -->
                    </a>

                    <!-- Instagram -->
                    <a class="hover:opacity-75" href="#" target="_blank" rel="noreferrer">
                        <span class="sr-only">Instagram</span>
                        <!-- SVG -->
                    </a>

                    <!-- WhatsApp -->
                    <a class="hover:opacity-75" href="https://wa.me/09602336216" target="_blank" rel="noreferrer">
                        <span class="sr-only">WhatsApp</span>
                        <!-- SVG -->
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4 lg:col-span-2 text-center sm:text-left">

                <!-- Quick Links -->
                <div>
                    <p class="font-semibold text-gray-800">Quick Links</p>
                    <nav class="mt-4 space-y-2 text-sm text-gray-500">
                        <a class="block hover:opacity-75" href="{{ route('about.sanctuary') }}">About</a>
                        <a class="block hover:opacity-75" href="{{ route('about.board-of-trustees') }}">Board of Trustees</a>
                        <a class="block hover:opacity-75" href="{{ route('about.history') }}">History</a>
                    </nav>
                </div>

                <!-- Contact Info -->
                <div>
                    <p class="font-semibold text-gray-800">Contact Info</p>
                    <nav class="mt-4 space-y-3 text-sm text-gray-500">
                        <div>Smart 🇵🇭 <br><b>0960-233-6216</b></div>
                        <div>Globe 🇵🇭 <br><b>0952-440-2457</b></div>
                        <div>US 🇺🇸 <br><b>+1-407-436-9202</b></div>
                    </nav>
                </div>

                <!-- Helpful Links -->
                <div>
                    <p class="font-semibold text-gray-800">Helpful Link</p>
                    <nav class="mt-4 space-y-2 text-sm text-gray-500">
                        <a class="block hover:opacity-75" href="{{ route('contact-us') }}">Contact</a>
                    </nav>
                </div>

            </div>
        </div>

        <!-- Bottom -->
        <p class="mt-10 text-center text-xs text-gray-800">
            © {{ now()->year }} The Sanctuary for Second Chances, Inc. All Rights Reserved.
        </p>
    </div>
</footer>
