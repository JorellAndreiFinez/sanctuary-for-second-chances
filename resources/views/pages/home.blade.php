@extends('layouts.app')
@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection

@section('content')

    <main class="grow w-full max-w-375 mx-auto px-4 pb-6 pt-20" x-data="{ open: false, modalImage: '' }">

        <div class="relative w-full px-4 h-[85vh] rounded-[40px] overflow-hidden group cursor-pointer"
            @click="modalImage = '{{ asset('assets/images/cover.png') }}'; open = true">

            <!-- Background Image -->
            <img src="{{ asset('assets/images/cover.png') }}" alt="Portrait"
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/50 transition-opacity duration-500 group-hover:bg-black/10"></div>

            <!-- Optional extra overlay -->
            <div class="absolute inset-0 bg-black/10 transition-opacity duration-500 group-hover:bg-transparent"></div>

            <!-- Title + Subtitle (Middle Right) -->
            <div
                class="absolute top-1/2 right-8 lg:right-20 transform -translate-y-1/2 text-right max-w-md z-20 transition-opacity duration-500 group-hover:opacity-0">
                <h1 class="text-6xl lg:text-6xl font-semibold text-[--secondary-color] drop-shadow-lg">
                    Welcome to the Sanctuary
                </h1>
                <h1 class="mt-4 text-xl lg:text-xl text-[--secondary-color] font-extrabold  leading-relaxed drop-shadow-md">
                    For Second Chances
                </h1>
            </div>
        </div>

        <section class="bg-[--text-color] py-16 mt-5 rounded-2xl">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <svg class="mx-auto mb-6 w-12 h-12 text-[--bg-color]" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M7.17 6A5.002 5.002 0 002 11c0 1.657.672 3.157 1.757 4.243L7.17 20l3.414-4.757A5.002 5.002 0 007.17 6zm10 0a5.002 5.002 0 00-5.17 5c0 1.657.672 3.157 1.757 4.243L17.17 20l3.414-4.757A5.002 5.002 0 0017.17 6z" />
                </svg>
                <p class="text-[--bg-color] text-xl sm:text-2xl lg:text-3xl font-semibold leading-relaxed">
                    "A spiritually guided, values-based recovery community for individuals overcoming addiction and
                    compulsive behaviors."
                </p>
            </div>
        </section>

        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    <div class="space-y-6 w-full">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                            A Sanctuary for Healing, Recovery, and Transformation
                        </h2>
                        <p class="leading-relaxed">
                            At the Sanctuary for Second Chances, we believe that healing is possible, and everyone deserves
                            a fresh start. Our mission is to provide a safe, supportive, and spiritually guided environment
                            for individuals recovering from addiction, co-dependency, and compulsive behaviors.
                        </p>
                        <p class="leading-relaxed">
                            Rooted in the 12-Step philosophy and values-based living, our programs offer structured
                            transitional housing, non-residential recovery support, and community reintegration services. We
                            prioritize compassion, dignity, and transformation—especially for vulnerable women in recovery.
                        </p>

                    </div>

                    <div class="flex justify-center md:justify-end">
                        <div class="w-full max-w-sm rounded-3xl sm:h-fit sm:max-w-screen overflow-hidden shadow-lg cursor-pointer"
                            @click="modalMedia = { src: '{{ asset('assets/videos/sanctuaryvideo.mp4') }}', type: 'video' }; open = true">
                            <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                                <source src="{{ asset('assets/videos/sanctuaryvideo.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="-mx-4 py-16">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-8">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[--text-color]">
                        A Place of Hope & Renewal
                    </h2>
                    <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
                        Whether you're seeking help, exploring resources, or looking to support our cause, you are
                        welcome here. This is a place of hope, honesty, and second chances.
                    </p>
                </div>

                <div class="overflow-hidden rounded-3xl shadow-lg cursor-pointer"
                    @click="modalImage = '{{ asset('assets/images/banner.png') }}'; open = true">
                    <img src="{{ asset('assets/images/banner.png') }}" alt="Addiction Center Banner"
                        class="w-full h-auto object-cover">
                </div>

            </div>

        </section>

        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/70 flex items-center justify-center z-50"
            @click.self="open = false">
            <div class="relative w-11/12 max-w-3xl rounded-3xl overflow-hidden shadow-2xl bg-gray-900">

                <!-- Close Button -->
                <button @click="open = false"
                    class="absolute top-4 right-4 text-white text-2xl font-bold z-30 hover:text-gray-300">&times;</button>

                <!-- Dynamic Image/Video Preview -->
                <template x-if="modalImage.endsWith('.mp4')">
                    <video :src="modalImage" controls autoplay
                        class="w-full h-auto object-contain rounded-3xl"></video>
                </template>
                <template x-if="!modalImage.endsWith('.mp4')">
                    <img :src="modalImage" alt="Preview" class="w-full h-auto object-contain rounded-3xl">
                </template>

            </div>
        </div>

        <!-- Updates Section -->
        <section class="py-16 bg-[var(--bg-color)] px-4 sm:px-6 lg:px-8" x-data="updatesComponent()">
            <h2 class="cardo text-4xl font-bold text-[var(--accent-color)] mb-12 text-center">
                Updates & Announcements
            </h2>

            <!-- Updates Grid -->
            <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <template x-for="(update, index) in updates" :key="index">
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:shadow-2xl transition-[var(--transition-medium)]">

                        <!-- Date -->
                        <div class="text-sm text-[var(--secondary-color)] mb-2" x-text="update.date"></div>

                        <!-- Title -->
                        <h3 class="cardo text-xl font-bold text-[var(--accent-color)] mb-2" x-text="update.title"></h3>

                        <!-- Short Description -->
                        <p class="hind text-[var(--hover-color)] mb-4" x-text="update.shortDesc"></p>

                        <!-- Images -->
                        <template x-if="update.images.length">
                            <div class="grid gap-2 mb-4"
                                :class="{
                                    'grid-cols-1': update.images.length === 1,
                                    'grid-cols-2': update.images.length === 2,
                                    'grid-cols-3': update.images.length >= 3
                                }">
                                <template x-for="(img, i) in update.images.slice(0, 3)" :key="img">
                                    <div class="relative cursor-pointer" @click="openModal(index)">
                                        <img :src="img" alt="Update Image" class="rounded-lg w-full h-40 object-cover">
                                        <template x-if="i === 2 && update.images.length > 3">
                                            <div
                                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-bold rounded-lg">
                                                +<span x-text="update.images.length - 3"></span>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </template>


                        <!-- See More Button -->
                        <button
                            class="self-start bg-[var(--accent-color)] text-[var(--bg-color)] px-4 py-2 rounded-lg font-semibold text-sm hover:bg-[var(--primary-color)] transition-[var(--transition-fast)]"
                            @click="openModal(index)">
                            See More
                        </button>
                    </div>
                </template>
            </div>

            <!-- Modal -->
            <div x-show="modalOpen" x-transition
                class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
                <div class="bg-white rounded-xl max-w-3xl w-full p-6 relative overflow-y-auto max-h-[90vh]"
                    @click.away="closeModal()">
                    <!-- Close Button -->
                    <button class="absolute top-4 right-4 text-[--accent-color] font-bold text-2xl"
                        @click="closeModal()">×</button>

                    <!-- Modal Header -->
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <div class="text-sm text-[--secondary-color]" x-text="currentUpdate.date"></div>
                            <h3 class="cardo text-2xl font-bold text-[--accent-color]" x-text="currentUpdate.title">
                            </h3>
                        </div>
                        <!-- Social Links -->
                        <div class="flex gap-4 mt-1 mr-10">
                            <template x-if="currentUpdate.socialLinks.facebook">
                                <a :href="currentUpdate.socialLinks.facebook" target="_blank">
                                    <ion-icon name="logo-facebook" class="text-[--accent-color] text-2xl"></ion-icon>
                                </a>
                            </template>
                            <template x-if="currentUpdate.socialLinks.instagram">
                                <a :href="currentUpdate.socialLinks.instagram" target="_blank">
                                    <ion-icon name="logo-instagram" class="text-[(--accent-color)] text-2xl"></ion-icon>
                                </a>
                            </template>
                            <template x-if="currentUpdate.socialLinks.linkedin">
                                <a :href="currentUpdate.socialLinks.linkedin" target="_blank">
                                    <ion-icon name="logo-linkedin" class="text-[var(--accent-color)] text-2xl"></ion-icon>
                                </a>
                            </template>
                        </div>
                    </div>

                    <!-- Modal Images -->
                    <div class="grid gap-4 mb-4"
                        :class="{
                            'grid-cols-1': currentUpdate.images.length === 1,
                            'grid-cols-2': currentUpdate.images
                                .length === 2,
                            'grid-cols-3': currentUpdate.images.length >= 3
                        }">
                        <template x-for="img in currentUpdate.images" :key="img">
                            <img :src="img" alt="Update Image" class="rounded-lg w-full object-cover">
                        </template>
                    </div>

                    <!-- Full Description -->
                    <p class="hind text-[var(--hover-color)] mt-2 whitespace-pre-line" x-text="currentUpdate.fullDesc">
                    </p>
                </div>
            </div>
        </section>

        <!-- Ionicons -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script>
            function updatesComponent() {
                return {
                    modalOpen: false,
                    currentUpdate: {},
                    updates: [{
                            date: "Dec 16, 2026",
                            title: "Milestone Achieved",
                            shortDesc: "We received our official accreditation by Philippine Drug Enforcement Agency (PDEA)...",
                            fullDesc: "Last December 18, we received a call marking our official accreditation by Philippine Drug Enforcement Agency (PDEA) for their Drug Demand Reduction Program. Together we move forward in promoting awareness, prevention, stigma reduction, hope and second chances.",
                            images: ["assets/images/posts/pdea.jpg"],
                            socialLinks: {
                                facebook: "https://www.facebook.com/sanctuaryforsecondchances",
                                instagram: "",
                                linkedin: ""
                            }
                        },
                        {
                            date: "Dec 16, 2026",
                            title: "DSWD CRLTO Info",
                            shortDesc: "For data security, we do not release copies of our CRLTO...",
                            fullDesc: "Thank you for your interest in our services. For data security, we do not release copies of our CRLTO. For transparency, you may verify our DSWD CRLTO by scanning the QR code at https://helps.dswd.gov.ph/QRScanner/PublicQRScanner...",
                            images: ["assets/images/posts/dswd.jpg"],
                            socialLinks: {
                                facebook: "",
                                instagram: "",
                                linkedin: ""
                            }
                        },
                        {
                            date: "Dec 16, 2026",
                            title: "Business Permit Secured",
                            shortDesc: "We have officially secured our Business Permit with the LGU of Magallanes...",
                            fullDesc: "We Did It! 🎉 We have officially secured our Business Permit with the LGU of Magallanes — another step forward in bringing hope, second chances and recovery to the community...",
                            images: ["assets/images/posts/permit.jpg"],
                            socialLinks: {
                                facebook: "https://www.facebook.com/sanctuaryforsecondchances",
                                instagram: "",
                                linkedin: ""
                            }
                        },
                        {
                            date: "Dec 16, 2026",
                            title: "Healing Together",
                            shortDesc: "Everyone deserves a second chance...",
                            fullDesc: "Everyone deserves a second chance. At The Sanctuary for Second Chances, we believe healing is possible — not alone, but together. Our purpose, mission, and values are rooted in love, dignity, and the unshakable belief that recovery is real...",
                            images: ["assets/images/posts/info-1.jpg", "assets/images/posts/info-2.jpg","assets/images/posts/info-3.jpg","assets/images/posts/info-4.jpg","assets/images/posts/info-5.jpg","assets/images/posts/info-6.jpg",
                            ],
                            socialLinks: {
                                facebook: "https://www.facebook.com/sanctuaryforsecondchances",
                                instagram: "https://www.instagram.com/sanctuaryforsecondchances",
                                linkedin: "https://www.linkedin.com/company/sanctuaryforsecondchances"
                            }
                        }
                    ],
                    openModal(index) {
                        this.currentUpdate = this.updates[index];
                        this.modalOpen = true;
                    },
                    closeModal() {
                        this.modalOpen = false;
                    }
                }
            }
        </script>


    </main>

@endsection

@section('scripts')

@endsection
