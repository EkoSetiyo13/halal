<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('v2/dashboard/assets/img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: [{{ asset('v2/dashboard/assets/css/fonts.min.css') }}]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    {{-- href="{{ asset('ecommerce/css/bootstrap.css') }}" --}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('v2/dashboard/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('v2/dashboard/assets/css/atlantis.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('v2/dashboard/assets/css/demo.css') }}">
    <style>
        body {
            -ms-overflow-style: none;
            /* for Internet Explorer, Edge */
            scrollbar-width: none;
            /* for Firefox */
            overflow-y: scroll;
        }

        body::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }


        .primary {
            background: #0c48a8
        }

    </style>
</head>

<body>
    <div class="wrapper">

        @include('v2.dashboard.layout.header')

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                @include('v2.dashboard.layout.leftbar')
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            @yield('content')
            @include('v2.dashboard.layout.footer')
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('v2/dashboard/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('v2/dashboard/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('v2/dashboard/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}">
    </script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Moment JS -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/moment/moment.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="{{ asset('v2/dashboard/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script> --}}

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Google Maps Plugin -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/gmaps/gmaps.js') }}"></script>

    <!-- Dropzone -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

    <!-- Fullcalendar -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

    <!-- DateTimePicker -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Bootstrap Wizard -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

    <!-- jQuery Validation -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/select2/select2.full.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('v2/dashboard/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js') }}">
    </script>

    <!-- Atlantis JS -->
    <script src="{{ asset('v2/dashboard/assets/js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ asset('v2/dashboard/assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('v2/dashboard/assets/js/demo.js') }}"></script>
    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
</body>

</html>
