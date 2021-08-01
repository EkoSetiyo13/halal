<!-- =========================================================
* Argon /argon PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-/argon-pro
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
  <title>Dashboard Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('/assets/logo_halal.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('/argon/assets/css/argon.css?v=1.1.0') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/argon/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand">
          <img src="{{ asset('/ecommerce/img/logo_halal.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          @include('layouts.module.sidebar')    
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">

    <!-- Main content -->
    @include('layouts.module.header')
    
    
    
    <!-- Page content -->
    @yield('content')
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('/argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <!-- Optional JS -->
  <!-- Argon JS -->
  <script src="{{ asset('/argon/assets/js/argon.js?v=1.1.0') }}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{ asset('/argon/assets/js/demo.min.js') }}"></script>

  <script>
    // Restricts input for the given textbox to the given inputFilter.
      function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
          textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
              this.oldValue = this.value;
              this.oldSelectionStart = this.selectionStart;
              this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
              this.value = this.oldValue;
              this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
              this.value = "";
            }
          });
        });
      }
  
  
      // Install input filters.
      setInputFilter(document.getElementById("int"), function(value) {
        return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("int1"), function(value) {
        return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("int2"), function(value) {
        return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("int3"), function(value) {
        return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("int4"), function(value) {
        return /^-?\d*$/.test(value); });
      setInputFilter(document.getElementById("int5"), function(value) {
        return /^-?\d*$/.test(value); });

  
      ;
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
</body>

</html>