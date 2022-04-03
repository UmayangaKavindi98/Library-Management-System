<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | UvaLMS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        {{-- include header  --}}
        @include('admin/header')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- School Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/schoolLogo.png" alt="School Logo" height="50px">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel-->
                <div class="user-panel mt-5 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Mis. Perera</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <!--user-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add new user</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Books
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/addBook" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Books</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/listed-Books" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Books</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/damaged-Books" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Damage Books</p>
                                </a>
                            </li>
                            </ul>
                        </li>

                        <!--Issue books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Issue books
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Issue new Book</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/issued-Books" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage issued Books</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/borrow-req-Books" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage borrow requests</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Categories-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage categories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Authors-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Authors
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add new author</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage authors</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>                    
                </nav>
            </div><!--end Sidebar -->
        </aside><!-- End of Main Sidebar Container -->

        {{-- page top content --}}
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Admin Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main body content --}}
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>8000</h3> <!---------------------------------------------------------->
                                    <p>Listed Books</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="/listed-Books" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>50</h3><!---------------------------------------------------------->
                                    <p>Books not return yet</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>2000</h3><!---------------------------------------------------------->
                                    <p>Reg. Users</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3><!---------------------------------------------------------->
                                    <p>Author List</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>
                    </div> <!--1st row-->

                    <!-- 2 nd row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            
                            <!-- TABLE: book borrow request -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                <h3 class="card-title">Book borrow requests</h3>
                
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table id="example1" class="table m-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>Book ID</th>
                                                    <th>Book Name</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">ST ID here</a></td>
                                                    <td>Book ID here</td>
                                                    <td>Book name here</td>
                                                    <td>
                                                        <button class="btn btn-success">Confirm</button>
                                                        <button class="btn btn-danger">Disline</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="/borrow-req-Books" class="btn btn-sm btn-secondary float-right">View All Requests</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>

                        </section><!-- Left col end-->
                        <!-- right col -->
                        <section class="col-lg-5 connectedSortable">
                            
                            <!-- Calendar -->
                            <div class="card bg-gradient-success">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                    <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                    <a href="#" class="dropdown-item">Add new event</a>
                                    <a href="#" class="dropdown-item">Clear events</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%"></div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- calender end -->

                        </section><!-- right col end-->
                    </div><!-- end 2 nd row -->

                </div><!--container-fluid-->
            </section><!--Main body content-->


        </div><!--content-wrapper-->

        {{-- include footer  --}}
        @include('admin/footer')
    </div><!--wrapper-->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Uva collage app -->
    <script src="dist/js/adminlte.js"></script>
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Table control script -->
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>
</html>