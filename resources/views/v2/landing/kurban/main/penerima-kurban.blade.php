@extends('v2.landing.kurban.layout.app')
@section('title')
    <title>Kurban Pusat Kajian Halal ITS</title>
@endsection

@section('content')

    <div class="pt-40 pb-40" id="beranda">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">Salurkan Kurbanmu disini</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Pusat Kajian Halal
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Setiap satu helai rambut kurban adalah satu kebaikan. Maka tebarlah kebaikan di hari Idul Adha yang
                    mulia ini. <b> (HR Ahmad dan Ibnu Majah) </b>
                </p>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-1/5">

            </div>
            <div class="w-full md:w-2/5">
                <div class="grid grid-cols-2">
                    <div><img
                            style=" -webkit-filter: brightness(0) invert(1); filter: brightness(0) invert(1); display: block; margin-left: auto; margin-right: auto;"
                            class="w-full " src="{{ asset('/v2/other/image/siluet-sapi.png') }}" /></div>
                    <!-- ... -->
                    <div><img
                            style="display: block; margin-left: auto; margin-right: auto; -webkit-filter: brightness(0) invert(1); filter: brightness(0) invert(1);"
                            class="w-full" src="{{ asset('/v2/other/image/goat.png') }}" /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>


    <section class="bg-white border-b py-8" id="penyuplai-kurban">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Penyuplai Kurban
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto primary w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full mb-4">
                <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <!--Card 1-->
                    @forelse($penyuplai as $row)
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="rounded overflow-hidden shadow-lg">
                                <img style="height: 200px; width: 300px"
                                    src="{{ asset('storage/penyedia-kurban/' . $row->image) }}" alt="Mountain">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 text-black"> {{ $row->name }}</div>
                                    <p class="text-gray-700 text-base">
                                        <b>Alamat</b>
                                        <br>
                                        {{ $row->alamat }}
                                        <br>
                                        <br>
                                        <b>Keterangan</b>
                                        <br>
                                        {{ substr($row->description, -100) }}

                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#surabaya</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#kambing</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#sapi</span>
                                </div>
                            </div>


                        </a>
                    @empty
                    @endforelse

                </div>
            </div>
            <h1 class="w-full text-x1 font-bold leading-tight text-center text-gray-800">
                <button
                    class="mx-auto lg:mx-0 hover:underline primary text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Penyuplai Kurban Lainnya
                </button>
            </h1>
        </div>

    </section>


    <section class="bg-white border-b py-8" id="penerima-kurban">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Lembaga Penerima Kurban
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto primary w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full mb-4">
                <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    @forelse($penerima as $row)
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="rounded overflow-hidden shadow-lg">
                                <img style="height: 200px; width: 300px"
                                    src="{{ asset('storage/penerima-kurban/' . $row->image) }}" alt="Mountain">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 text-black"> {{ $row->name }}</div>
                                    <p class="text-gray-700 text-base">
                                        <b>Alamat</b>
                                        <br>
                                        {{ $row->alamat }}
                                        <br>
                                        <br>
                                        <b>Keterangan</b>
                                        <br>
                                        {{ substr($row->description, -100) }}

                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#surabaya</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#kambing</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#sapi</span>
                                </div>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>
            </div>
            <h1 class="w-full text-x1 font-bold leading-tight text-center text-gray-800">
                <button
                    class="mx-auto lg:mx-0 hover:underline primary text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Lembaga Penerima Kurban Lainnya
                </button>
            </h1>
        </div>

    </section>

    <section class="bg-white border-b py-8" id="galeri">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Galery
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto primary w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
        </div>
        {{-- <div class="container mx-auto flex flex-wrap">
        <div class="lg:w-2/3 mx-auto">
            <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
                <img alt="gallery"
                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                    src="https://dummyimage.com/820x340">
                <div class="text-center relative z-10 w-full">
                    <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-2">
                <div class="px-2 w-1/2">
                    <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                        <img alt="gallery"
                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                            src="https://dummyimage.com/542x460">
                        <div class="text-center relative z-10 w-full">
                            <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                            <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-2 w-1/2">
                    <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                        <img alt="gallery"
                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                            src="https://dummyimage.com/542x420">
                        <div class="text-center relative z-10 w-full">
                            <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                            <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->

@endsection
