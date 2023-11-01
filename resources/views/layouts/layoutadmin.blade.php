<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('images/pupr.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('CostumStyle/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.dateTime.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('CostumStyle/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('CostumStyle/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('CostumStyle/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/header-colors.css')}}" />
    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/style.css')}}">
    <!-- Page Title -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <title>SISIRUMBA</title>

</head>

<!-- Bagian Body Semua Berawal Dari Sini -->

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper (Bagian SideBar)-->
        <div class="sidebar-wrapper" data-simplebar="true">

            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <div>
                    <!-- <i class='lni lni-heart logo-icon'></i> -->
                    <img src="{{asset('images/pupr.png')}}" class="" alt="logo icon" style="width:30px; height:auto;">
                </div>
                <div>
                    <br>
                    <a href="{{url('/')}}">
                        <h4 class="logo-text">SISIRUMBA</h4>
                    </a>
                    <br>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-chevron-left-circle font-35'></i>
                </div>
            </div>

            <!--Navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{url('/')}}" class="">
                        <div class="parent-icon"><i class='bx bxs-home'></i>
                        </div>
                        <div class="menu-title">Home</div>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{url('/profile')}}" class="">
                        <div class="parent-icon"><i class='bx bxs-user'></i>
                        </div>
                        <div class="menu-title">My Profile</div>
                    </a>
                </li> -->

                @if((Auth::user()->role ?? '') == 'admin' || (Auth::user()->role ?? '') == 'super admin')
                <li>
                    <a href="javascript:;" class="">
                        <div class="parent-icon"><i class='bx bx-notepad'></i>
                        </div>
                        <div class="menu-title">Data User Administration</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>List
                                User</a>
                        </li>
                    </ul>
                </li>
                @endif

                <!-- BAGIAN TATONAS -->
                <!-- <li>
                    <a href="{{url('/findsensor')}}" class="">
                        <div class="parent-icon"><i class='bx bx-search-alt'></i>
                        </div>
                        <div class="menu-title">Find Sensor</div>
                    </a>
                </li> -->
                <li>
                    <a href="{{url('/datasensor')}}" class="">
                        <div class="parent-icon"><i class='bx bx-dialpad-alt'></i>
                        </div>
                        <div class="menu-title">Data Sensor</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dataposhidrologi')}}" class="">
                        <div class="parent-icon"><i class='bx bx-border-all'></i>
                        </div>
                        <div class="menu-title">Data Pos Hidrologi</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/neracaair')}}" class="">
                        <div class="parent-icon"><i class='bx bx-stats'></i>
                        </div>
                        <div class="menu-title">Neraca Air</div>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{url('/transaction')}}" class="">
                        <div class="parent-icon"><i class='bx bx-transfer-alt'></i>
                        </div>
                        <div class="menu-title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/transactiondetail')}}" class="">
                        <div class="parent-icon"><i class='bx bxs-data'></i>
                        </div>
                        <div class="menu-title">Transaction Detail</div>
                    </a>
                </li> -->
                <!-- END TATONAS -->

            </ul>
            <!--end navigation-->

        </div>
        <!--end sidebar wrapper -->

        <!--start header (Bagian Atas (Topbar)) -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                    </a>
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                    </a>
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown ">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret text-secondary " href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                            <!-- <i class="bx bxs-user-circle text-secondary font-50"></i> -->
                            <i class='bx bx-log-out-circle '></i>&nbsp&nbsp&nbsp Logout
                        </a>
                        <!-- <button class="btn btn-sm"> -->
                        <ul class="dropdown-menu dropdown-menu-end text-secondary">
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li>
                                <!-- <a class="dropdown-item" href="{{url('logout')}}"><i
                                            class='bx bx-log-out-circle'></i><span>Logout</span></a> -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class='bx bx-log-out-circle'></i>
                                        Logout</button>
                                    <!-- <a class="dropdown-item" href="{{url('logout')}}"><i
                                            class='bx bx-log-out-circle'></i><span>Logout</span></a> -->
                                </form>
                            </li>
                        </ul>
                        <!-- </button> -->
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->

        <!--start page wrapper (Bagian Isi Utama)-->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!-- <footer class="page-footer">
                <p class="mb-0 ">Copyright © 2021 <a href="#" class="font-italic"> Dr. Paradise</a></p>
            </footer> -->
    </div>
    <!--end wrapper-->

    <!-- Additional Css -->
    <!-- <script src="{{asset('CostumStyle/script.js')}}"></script> -->

    <!-- Bootstrap JS -->
    <script src="{{asset('CostumStyle/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('CostumStyle/js/jquery.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.dateTime.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/moment.min.js')}}"></script>
    <script src="{{asset('CostumStyle/js/table-datatable.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('CostumStyle/js/app.js')}}"></script>

    <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apex-custom.js')}}"></script> -->
    @yield('CustomScripts')
    <!-- <script src="{{asset('CostumStyle/js/index.js')}}"></script> -->



</body>

</html>