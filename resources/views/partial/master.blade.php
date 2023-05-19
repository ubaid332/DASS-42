<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ env('APP_NAME') }} - {{ ucwords(request()->segment(count(request()->segments()))) }} </title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <link href="{{asset('assets/plugins/morris-chart/morris.css')}}" rel="stylesheet">
        <!-- Theme Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/slidebars.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/custome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        @stack('extended-css')
    </head>

    <body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <h6>Travis Watson</h6>
                            <p class="text-muted m-0">Admin</p>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    @include('partial.side_bar')

                    <!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                @include('partial.header')
                <!-- header section end-->

                <div class="container-fluid">
                    @yield('content')                          
                    
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2023 &copy; Ubaid Ullah
                </footer>
                <!--footer section end-->


                <!-- Right Slidebar start -->
                @include('partial.right_side_bar')
                <!--end Right Slidebar-->
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-migrate.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/slidebars.min.js')}}"></script>

        <!--plugins js-->
        <script src="{{asset('assets/plugins/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.sparkline.init.js')}}"></script>

        <script src="{{asset('assets/plugins/chart-js/Chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/morris-chart/raphael-min.js')}}"></script>
        <script src="{{asset('assets/plugins/morris-chart/morris.js')}}"></script>
        <script src="{{asset('assets/pages/dashboard-init.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


         <!-- Responsive and datatable js -->
         <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
         <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

         <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
        @stack('extended-js')

        <!--app js-->
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>
    </body>
</html>
