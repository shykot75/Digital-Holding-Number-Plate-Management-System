<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ডিজিটাল হোল্ডিং নাম্বার প্লেট সফটওয়্যার সিস্টেম" name="লক্ষ্মীপুর পৌরসভা" />
{{--    <!-- App favicon -->--}}
{{--    <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico">--}}

    <!-- Font Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- DataTables -->
    <link href="{{asset('/')}}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Sweetalert Css-->
    <link href="{{asset('/')}}assets/css/sweetalert.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css-->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">



</head>

<body data-sidebar="dark" style="letter-spacing: 1px; font-family: 'Noto Serif Bengali', serif !important;">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">

                    <a href="" class="logo logo-light">
                                <span class="logo-sm" >
                                    <img src="{{asset('/')}}img/admin.png" alt="" height="50">
                                </span>
                        <span class="logo-lg" >
                                    <img src="{{asset('/')}}img/admin.png" alt=""  height="70">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <a class="app-search d-none d-lg-block" href="{{route('taxpayer.search')}}">
                        <button class="btn btn-danger font-weight-bold font-size-14">ট্যাক্সদাতা অনুসন্ধান <i class="fas fa-search"></i></button>

                </a>


            </div>





            <div class="d-flex">
                <div class="d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('/')}}img/logo.jpeg" height="60" style="float: left; margin-right: 10px;">
                        <span style="font-size: 18px; font-weight: 800; color: #2c3e50;" >ডিজিটাল হোল্ডিং নাম্বার প্লেট সফটওয়্যার সিস্টেম</span><br>
                        <span style="font-size: 15px; font-weight: 600; color: #2c3e50;" >লক্ষ্মীপুর পৌরসভা</span>
                    </button>

                </div>
            </div>







            <div class="d-flex">
                <div class="dropdown d-inline-block" style="font-family: Arial, sans-serif;">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('/')}}img/admin.png"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1" style="font-size: 14px; font-weight: 600; letter-spacing: 1px;">{{Auth::user()->name}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); "><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu" >

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu" >
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu" >
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span style="font-size: 18px; font-weight: 600; letter-spacing: 1px;">হোম</span>
                        </a>

                    </li>


                        <li class="">
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-layout"></i>
                                <span style="font-size: 18px; font-weight: 600; letter-spacing: 1px;">ট্যাক্সদাতা</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a style="font-size: 16px; font-weight: 600; letter-spacing: 1px;" href="{{route('taxpayer.add')}}">ট্যাক্সদাতা যোগ</a></li>
                                <li><a style="font-size: 16px; font-weight: 600; letter-spacing: 1px;" href="{{route('taxpayer.manage')}}">ট্যাক্সদাতা তালিকা</a></li>


                            </ul>
                        </li>




                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span style="font-size: 18px; font-weight: 600; letter-spacing: 1px;">ওয়ার্ড</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a style="font-size: 16px; font-weight: 600; letter-spacing: 1px;"  href="{{route('ward.add')}}">ওয়ার্ড যোগ</a></li>
                            <li><a style="font-size: 16px; font-weight: 600; letter-spacing: 1px;"  href="{{route('ward.manage')}}">ওয়ার্ড তালিকা</a></li>

                        </ul>
                    </li>





                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

        @yield('body')

        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



        <footer class="footer" style="font-family: Arial, sans-serif;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> ©Lakshmipur Pourashava.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by TeamxBD
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

  Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->




    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>
<script src="{{asset('/')}}assets/libs/sweetalert/sweetalert.min.js"></script>

<!-- apexcharts -->
<script src="{{asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('/')}}assets/js/pages/dashboard.init.js"></script>


<!-- Required datatable js -->
<script src="{{asset('/')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}assets/libs/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/')}}assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('/')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{asset('/')}}assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>

</body>



</html>
