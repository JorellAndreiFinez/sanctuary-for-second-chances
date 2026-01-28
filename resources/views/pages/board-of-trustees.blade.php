@extends('layouts.about')
@section('title', 'About - Board of Trustees')

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
                                <h3 class=" text-xl font-semibold sm:text-center sm:text-2xl md:text-center uppercase">
                                    Board of Trustees
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="py-10 px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                    Lorem Ipsum
                </h2>

                <p class="mt-6 text-lg md:text-xl leading-relaxed">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, tempore incidunt pariatur reiciendis
                    aut dignissimos, quibusdam saepe in nostrum iure quos debitis sint est animi vitae corrupti, amet eaque?
                    Nihil.
                </p>
            </div>

            <figure class="highcharts-figure">
                <div id="container"></div>

            </figure>

        </section>

        <!-- Modal -->
        <div x-data="{ showModal: false, currentName: '', currentImage: '', zoom: false }" x-ref="modalRoot"
            @open-modal.window="
              currentName = $event.detail.name;
              currentImage = $event.detail.info;
              showModal = true;
              zoom = false;
              document.body.style.overflow = 'hidden';
          "
            x-on:close-modal.window="
              showModal = false;
              zoom = false;
              document.body.style.overflow = '';
          ">

            <div x-show="showModal" x-transition x-cloak
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-2"
                @click.self="showModal = false; document.body.style.overflow = ''">

                <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-[90vw] max-h-[95vh] relative flex flex-col">

                    <button @click="showModal=false; zoom=false; document.body.style.overflow = ''"
                        class="absolute top-2 right-2 text-gray-500 hover:text-2xl">&times;</button>

                    <!-- Scrollable zoomable container -->
                    <div class="flex-1 overflow-auto">
                        <div class="inline-block">
                            <img :src="currentImage" alt=""
                                class="transition-transform duration-300 object-contain">
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </main>
@endsection


@section('scripts')
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'organization',
                inverted: true,
                height: 650,
                backgroundColor: 'transparent'
            },

            title: {
                text: null
            },

            tooltip: {
                outside: true
            },
            credits: {
                enabled: false
            },

            exporting: {
                enabled: false,
                allowHTML: true,
                sourceWidth: 1000,
                sourceHeight: 650
            },

            plotOptions: {
                series: {
                    cursor: 'pointer',
                    dataLabels: {
                        useHTML: true, // keep using HTML labels
                        verticalAlign: 'middle',
                        align: 'center',
                        formatter: function() {
                            return `
                        <div style="
                            padding: 8px;
                            border-radius: 12px;
                            background: rgba(0,0,0,0.6);
                            text-align: center;
                            min-width: 140px;
                        ">
                            ${this.point.title ? `<div style="font-weight:bold; color:white;">${this.point.title}</div>` : ''}
                            ${this.point.name ? `<div style="color:white;">${this.point.name}</div>` : ''}
                        </div>
                    `;
                        }
                    },
                    point: {
                        events: {
                            click: function() {
                                if (!this.info) return;
                                window.dispatchEvent(
                                    new CustomEvent('open-modal', {
                                        detail: {
                                            name: this.name,
                                            info: this.info
                                        }
                                    })
                                );
                            }
                        }
                    }
                }
            },

            series: [{
                type: 'organization',
                keys: ['from', 'to'],

                data: [
                    ['Chairperson', 'Vice-Chairperson'],
                    ['Vice-Chairperson', 'Secretary'],
                    ['Vice-Chairperson', 'Treasurer'],
                    ['Vice-Chairperson', 'Members'],
                    ['Vice-Chairperson', 'Program Director'],
                    ['Members', 'Member1'],
                    ['Members', 'Member2'],
                ],

                nodes: [{
                        id: 'Chairperson',
                        title: 'Chairperson | Program Manager',
                        name: 'Ruth La Victoria',
                        image: '/assets/images/users/image-3.png',
                        info: '/assets/images/organization/chairperson&program-manager.jpg',
                        height: 120,
                        width: 200,
                        borderRadius: 12,
                        dataLabels: {
                            useHTML: true,
                            verticalAlign: 'middle',
                            align: 'center',
                            formatter: function() {
                                return `
                        <div style="
                            padding: 8px;
                            border-radius: 12px;
                            background: rgba(0,0,0,0.6);
                            text-align: center;
                            min-width: 160px; /* adjust for top node */
                            display: inline-block;
                        ">
                            ${this.point.title ? `<div style="font-weight:bold; color:white;">${this.point.title}</div>` : ''}
                            ${this.point.name ? `<div style="color:white;">${this.point.name}</div>` : ''}
                            ${this.point.image ? `<img src="${this.point.image}" class="mx-auto mt-2 rounded-full" style="width:50px;height:50px;">` : ''}
                        </div>
                    `;
                            }
                        }
                    },
                    {
                        id: 'Vice-Chairperson',
                        title: 'Vice-Chairperson | Executive Director',
                        name: 'Felix La Victoria',
                        image: '/assets/images/users/image-4.png',
                        info: '/assets/images/organization/vice-chairperson&executive-director.jpg',
                        height: 110,
                        width: 180,
                        borderRadius: 12
                    },
                    {
                        id: 'Secretary',
                        title: 'Secretary',
                        name: 'Christine Carlos',
                        image: '/assets/images/users/image6.png',
                        info: '/assets/images/organization/secretary.jpg',
                        height: 100,
                        width: 180,
                        borderRadius: 10
                    },
                    {
                        id: 'Treasurer',
                        title: 'Treasurer',
                        name: 'Adonis Roy Olalo',
                        image: '/assets/images/users/image5.png',
                        info: '/assets/images/organization/treasurer.jpg',
                        height: 100,
                        width: 180,
                        borderRadius: 10
                    },
                    {
                        id: 'Program Director',
                        title: 'Program Director',
                        name: 'Wendy Veeh Tragico-Batar',
                        image: '/assets/images/users/image7.png',
                        info: '/assets/images/organization/program-director.jpg',
                        height: 100,
                        width: 180,
                        borderRadius: 10
                    },
                    {
                        id: 'Members',
                        name: 'Members',
                        height: 100,
                        width: 180,
                        borderRadius: 10,
                        dataLabels: {
                            useHTML: true, // must be true
                            formatter: function() {
                                return `
                                  <div style="
                                      padding: 8px;
                                      border-radius: 10px;
                                      background: rgba(0,0,0,0.6);
                                      text-align: center;
                                      color: #1E1E1E; d
                                      font-weight: bold;
                                  ">
                                      ${this.point.name}
                                  </div>
                              `;
                            }
                        }
                    },
                    {
                        id: 'Member1',
                        title: 'Member',
                        name: 'Manuel Laluna',
                        image: '/assets/images/users/image9.png',
                        info: '/assets/images/organization/member1.jpg',
                        height: 100,
                        width: 180,
                        borderRadius: 10
                    },
                    {
                        id: 'Member2',
                        title: 'Member',
                        name: 'Pia Alyna Litanona',
                        image: '/assets/images/users/image8.png',
                        info: '/assets/images/organization/member2.jpg',
                        height: 100,
                        width: 180,
                        borderRadius: 10
                    }
                ],

                colorByPoint: false,
                color: 'white',
                borderColor: 'white',

                levels: [{
                        level: 0,
                        color: 'white',
                        dataLabels: {
                            color: 'white'
                        }
                    },
                    {
                        level: 1,
                        color: 'white',
                        dataLabels: {
                            color: 'white'
                        }
                    },
                    {
                        level: 2,
                        color: 'white',
                        dataLabels: {
                            color: 'white'
                        }
                    }
                ]
            }]
        });
    </script>
@endsection
