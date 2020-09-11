<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{asset('assets/images/favicon_1.ico')}}">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- animate css -->
        <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />

          <!-- Toastr -->
          <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">

        <!-- Waves-effect -->
        <link href="{{asset('assets/css/waves-effect.css')}}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{asset('assets/css/sweet-alert.min.css')}}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{asset('assets/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
         @include('layouts.backend.partials.topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            @include('layouts.backend.partials.leftsidebar')
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12">
                                    <h4 class="pull-left page-title">Welcome !</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">Moltran</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                           @yield('content')
                        </div>
                    

                     <!-- Start Widget -->
                        
                
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            @include('layouts.backend.partials.rightsidebar')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/moment-2.2.1.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('assets/js/sweet-alert.min.js')}}"></script>
        <script src="{{asset('assets/js/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('assets/js/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('assets/js/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('assets/js/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('assets/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('assets/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('assets/js/jquery.todo.js')}}"></script>

        <!-- Toastr -->
        <script src="{{asset('assets/js/toastr.min.js')}}"></script>
        {!! toastr()->render() !!}
     
        <!-- DataTables -->
        <script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.bootstrap.js')}}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
    </body>
</html>