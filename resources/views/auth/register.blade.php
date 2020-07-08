<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
   <!-- Favicon -->
   <link rel="icon" href="{{ asset('/argon/assets/img/brand/favicon.png') }}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{ asset('/argon/assets/css/argon.css?v=1.1.0') }}" type="text/css">
 </head>
 
 <body class="bg-gradient-image">
   <!-- Navbar -->
   
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header  py-7 py-lg-8 pt-lg-9">
        <div class="container">
          <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white">Buat Akun Halal ITS</h1>
                <p class="text-lead text-white">Selamat Datang di Website Qurban Halal ITS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- Page content -->
     <div class="container mt--8 pb-5">
       <!-- Table -->
       <div class="row justify-content-center">
         <div class="col-lg-8 col-md-8">
           <div class="card bg-secondary border-0">    
             <div class="card-body px-lg-5 py-lg-5">
               


               {{-- <form role="form">
                 <div class="form-group">
                   <div class="input-group input-group-merge input-group-alternative mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                     </div>
                     <input class="form-control" placeholder="Name" type="text">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="input-group input-group-merge input-group-alternative mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                     </div>
                     <input class="form-control" placeholder="Email" type="email">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="input-group input-group-merge input-group-alternative">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                     </div>
                     <input class="form-control" placeholder="Password" type="password">
                   </div>
                 </div>
                 <div class="text-center">
                   <button type="button" class="btn btn-primary mt-4">Create account</button>
                 </div>
               </form> --}}

                <div class="container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        
                        <li class="nav-item" style="margin-left: 100px">
                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Buat Akun Penyuplai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Buat Akun Instansi Penerima</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: black">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <input id="is_admin" type="hidden" class="form-control" name="is_admin" value="0" required autocomplete="name" autofocus>
                                    <input id="role" type="hidden" class="form-control" name="is_member" value="1" required autocomplete="name" autofocus>
                                    <input id="role" type="hidden" class="form-control" name="nama_role" value="penyuplai" required autocomplete="name" autofocus>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register Penyuplai') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <input id="is_admin" type="hidden" class="form-control" name="is_admin" value="0" required autocomplete="name" autofocus>
                                    <input id="role" type="hidden" class="form-control" name="is_member" value="1" required autocomplete="name" autofocus>
                                    <input id="role" type="hidden" class="form-control" name="nama_role" value="penerima" required autocomplete="name" autofocus>


                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register Penerima') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js/popper.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/js/pace.min.js') }}"></script>
   <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
   <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
   <!-- Argon JS -->
   <script src="{{asset('assets/js/argon.js?v=1.1.0')}}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{asset('assets/js/demo.min.js')}}"></script>
 </body>
 
 </html>