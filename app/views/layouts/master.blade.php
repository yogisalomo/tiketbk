<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiket BK</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset('backend/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- font Awesome -->
        <link href="{{asset('backend/css/bootstrap/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Ionicons -->
        <link href="{{asset('backend/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
        <link href="{{asset('backend/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('backend/css/datatables/dataTables.bootstrap.css')}}">

        <link href="{{asset('backend/css/bootstrap/bootstrap-datetimepicker.css')}}" rel="stylesheet">
        <script type="text/javascript" src="{{asset('backend/js/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/js/moment.js')}}"></script>
        <script src="{{asset('backend/js/bootstrap/bootstrap-datetimepicker.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Tiket BK
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="{{url('pesan')}}">
                                <i class="glyphicon glyphicon-user"></i>Pesan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('backend/img/avatar3.png')}}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, I'm BK</p>

                            <a href="#">How may I help you?</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Data</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('planes')}}"><i class="fa fa-folder"></i><span>Planes</span></a></li>
                                <li><a href="{{url('tickets')}}"><i class="fa fa-folder"></i><span>Tickets</span></a></li>
                                <li><a href="{{url('customers')}}"><i class="fa fa-folder"></i><span>Customer</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- Bootstrap -->
        <script src="{{asset('backend/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('backend/js/AdminLTE/app.js')}}" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->

        <script type="text/javascript" src="{{asset('backend/js/tinymce.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/jquery/jquery-ui.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/jquery/jquery.jeditable.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/jquery/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/datatables/jquery.dataTables.editable.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/scripts.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/plugins/highcharts/js/highcharts.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/plugins/highcharts/js/modules/funnel.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/plugins/highcharts/js/modules/exporting.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/plugins/tabletools/js/dataTables.tableTools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/datatables/dataTables.bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/bootstrap/bootstrap3-typeahead.min.js')}}"></script>
        @yield('page_script')
    </body>
</html>
