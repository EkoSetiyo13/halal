<!-- FUNGSI EXTENDS DIGUNAKAN UNTUK ME-LOAD MASTER LAYOUTS YANG ADA, KARENA INI ADALAH HALAMAN HOME MAKA KITA ME-LOAD LAYOUTS ADMIN.BLADE.PHP -->
<!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
@extends('layouts.admin')

<!-- TAG YANG DIAPIT OLEH SECTION('TITLE') AKAN ME-REPLACE @YIELD('TITLE') PADA MASTER LAYOUTS -->
@section('title')
<title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Halal</li> --}}
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dashboard Binaan Halal</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Jumlah Binaan</small>
                                        <br>
                                        <strong class="h4"> {{$total_umkm}} </strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Jumlah Binaan UMKM</small>
                                        <br>
                                        <strong class="h4"> {{$total_umkm_aktif}} </strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Jumlah Binaan Kader</small>
                                        <br>
                                        <strong class="h4"> {{$total_kader}} </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-xl-6">
            <div id="pie_chart" style="width:400px; height:500px;">
            </div>
        </div>
    </div>







</main>
@endsection

@section('js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    var analytics = <?php echo $kota; ?>

    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);


    function drawChart() {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title: 'Binaan Berdasarkan Asal Kota'
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
    }
</script>

<script type="text/javascript">
    var bpom = <?php echo $kota; ?>

    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);


    function drawChart() {
        var data = google.visualization.arrayToDataTable(bpom);
        var options = {
            title: 'Binaan Berdasarkan Asal Kota'
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart_bpom'));
        chart.draw(data, options);
    }
</script>
@endsection