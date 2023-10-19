<!-- Halaman Ini Sudah Sesuai Tata Penulisan -->

@extends('layouts.layoutcctvdarurat')

@section('jungul')
<div class="sidebar-wrapper" data-simplebar="true">

    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <div>
            <!-- <i class='lni lni-heart logo-icon'></i> -->
            <img src="{{asset('images/pupr.png')}}" class="" alt="logo icon" style="width:30px; height:auto;">
        </div>
        <div>
            <br>
            <a href="{{url('/home')}}">
                <h4 class="logo-text">SISIRUMBA</h4>
            </a>
            <br>
        </div>
        <div class="toggle-icon ms-auto">
        </div>
    </div>

    <!--Navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 1</div>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 2</div>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 3</div>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 4</div>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 5</div>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="parent-icon"><i class='bx bx-border-all'></i>
                </div>
                <div class="menu-title">CCTV 6</div>
            </a>
        </li>
        <!-- END TATONAS -->

    </ul>
    <!--end navigation-->

</div>

@section('content')
<!--Container-->
<div class="container">
    <div>
        <div class="card" style="margin-top:1rem;">
            <div class="card-header text-center">
                <h6 class="mb-0">Sensor Geolocation</h6>
            </div>
            <!-- <div class="input-group card-body shadow-sm" style="margin-bottom: 0.5rem;border-radius:0.25rem;">
                <input type="text" id="markerSearch" class="form-control" placeholder="Cari Hardware">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" id="searchButton" type="button"><i
                            class='bx bx-search-alt'></i> Cari</button>
                </div>
            </div> -->

            <div class="card-body">
                <!-- <canvas id="chart1"></canvas> -->
                <!-- <div id="map" class='map shadow' style="border-radius:0.5rem;"></div> -->
                <img src="{{asset('CostumStyle/images/cctv1.jpg')}}" style="border-radius:0.5rem;width:100%;">

            </div>

        </div>
    </div>
</div>
<!-- End of Container -->

@section('CustomScripts')
@endsection


@endsection