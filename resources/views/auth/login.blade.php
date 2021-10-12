<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Halal</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

    </style>
</head>

<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="{{ url('/') }}" style=" width: 100px;"><img class="transform scale-100 md:scale-100"
                        src="{{ asset('/ecommerce/img/logo_halal.png') }}" alt=""></a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Selamat Login</p>

                <form class="flex flex-col pt-3 md:pt-8" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-user"></i>
                            </span>
                        </div>

                        <!-- $errors->has('email') AKAN MENGECEK JIKA ADA ERROR DARI HASIL VALIDASI LARAVEL, SEMUA KEGAGALAN VALIDASI LARAVEL AKAN DISIMPAN KEDALAM VARIABLE $errors -->
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" autofocus
                            required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-lock"></i>
                            </span>
                        </div>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="row">
                        @if (session('error'))
                            <div class="col-md-12">
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif

                    </div>
                    <button class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">Login</button>

                </form>

            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
        </div>
    </div>

</body>

</html>
