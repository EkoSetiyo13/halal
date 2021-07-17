@extends('v2.landing.kurban.layout.app')
@section('title')
    <title>Kurban Pusat Kajian Halal ITS</title>
@endsection

@section('content')
    @php
    $values = explode(',', $penyuplai->pengiriman);
    @endphp

    <div class="pt-20 pb-20" id="beranda">
        <h1 class="my-4 text-5xl text-center font-bold leading-tight">
            Lembaga Penyedia Kurban
        </h1>
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
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ asset('storage/penyedia-kurban/' . $penyuplai->image) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Nama Penyuplai</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $penyuplai->name }}</h1>
                    <div class="flex mb-4">
                        {{-- <span class="flex items-center">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                  </svg>
                  <span class="text-gray-600 ml-3">4 Reviews</span>
                </span> --}}
                        {{-- <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span> --}}
                    </div>
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Deskripsi</h2>
                    <p class="leading-relaxed">{{ $penyuplai->description }}</p>
                    <table class="min-w-full table-auto">
                        <thead class="justify-between">
                            <tr class="bg-indigo-500 w-full">
                                <th class="px-16 py-2">
                                    <span class="text-white">Jenis Hewan</span>
                                </th>
                                <th class="px-16 py-2 text-left">
                                    <span class="text-white">Jumlah</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-200">
                            <tr class="bg-white border-2 border-gray-200">
                                <td class="px-16 py-2">
                                    Jumlah Sapi
                                </td>
                                <td class="px-16 py-2">
                                    {!! $penyuplai->jumlah_sapi !!}
                                </td>
                            </tr>
                            <tr class="bg-white border-2 border-gray-200">

                                <td class="px-16 py-2">
                                    Jumlah Kambing
                                </td>
                                <td class="px-16 py-2">
                                    {!! $penyuplai->jumlah_kambing !!}
                                </td>
                            </tr>
                            <tr class="bg-white border-2 border-gray-200">
                                <td class="px-16 py-2">
                                    Jumlah Kerbau
                                </td>
                                <td class="px-16 py-2">
                                    {!! $penyuplai->jumlah_kerbau !!}
                                </td>
                            </tr>
                            <tr class="bg-white border-2 border-gray-200">
                                <td class="px-16 py-2">
                                    Jumlah Hewan Lain
                                </td>
                                <td class="px-16 py-2">
                                    {!! $penyuplai->jumlah_lain !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-6 pt-16">
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" name="pengiriman[]"
                                value="bebas ongkir dalam kota radius 5KM" disabled id="customCheck1" type="checkbox" @if (in_array('bebas ongkir dalam kota radius 5KM', $values)) checked @endif>
                            <label class="custom-control-label" for="customCheck1">bebas ongkir dalam kota radius
                                5KM</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" disabled name="pengiriman[]" value="bebas ongkir dalam kota"
                                id="customCheck2" type="checkbox" @if (in_array('bebas ongkir dalam kota', $values)) checked @endif>
                            <label class="custom-control-label" for="customCheck2">bebas ongkir dalam kota</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" disabled name="pengiriman[]" value="bayar ongkir dalam kota"
                                id="customCheck3" type="checkbox" @if (in_array('bayar ongkir dalam kota', $values)) checked @endif>
                            <label class="custom-control-label" for="customCheck3">bayar ongkir dalam kota </label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" disabled name="pengiriman[]"
                                value="siap kirim luar kota dengan ongkos kirim" id="customCheck5" type="checkbox" @if (in_array('siap kirim luar kota dengan ongkos kirim', $values)) checked @endif>
                            <label class="custom-control-label" for="customCheck4">siap kirim luar kota dengan ongkos
                                kirim</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" disabled name="pengiriman[]" value="bisa diambil sendiri"
                                id="customCheck5" type="checkbox" @if (in_array('bisa diambil sendiri', $values)) checked @endif>
                            <label class="custom-control-label" for="customCheck5">bisa diambil sendiri</label>
                        </div>

                    </div>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        {{-- <div class="flex">
                            <span class="mr-3">Color</span>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div> --}}
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">
                                <a class="ml-2 text-gray-500"
                                    href="https://api.whatsapp.com/send?phone=62{{ substr($penyuplai->no_wa, 1) }}&text=Assalamualaikum,">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        class="w-10 h-10" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                                Chat Sekarang
                            </span>
                            {{-- <div class="relative">
                                <select
                                    class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                                    <option>SM</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <span
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Button</button>
                <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                  </svg>
                </button>
              </div> --}}
                </div>
            </div>
        </div>
    </section>




@endsection
