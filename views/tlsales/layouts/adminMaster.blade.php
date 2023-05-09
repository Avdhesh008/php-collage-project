<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TL (Sales) Admin</title>



  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  <!-- iCheck -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{url('public/assets/admin/dist/css/adminlte.min.css')}}">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- summernote -->

  <link rel="stylesheet" href="{{url('public/assets/admin/plugins/summernote/summernote-bs4.min.css')}}">

  <!-- toastr css -->
  <link rel="stylesheet" href="{{url('public/assets/toastr/css/toastr.min.css')}}">
  <!-- toastr css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
 

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Preloader -->

  <div class="preloader flex-column justify-content-center align-items-center">

    <img class="animation__shake" src="{{url('public/assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">

  </div>



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="{{url('admin/dashboard')}}" class="nav-link">Home</a>

      </li>    

    </ul>

   
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible hide-cls  hide_after_interval" role="alert">
        <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{$error}}
    </div>
    @endforeach
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible hide-cls hide_after_interval" role="alert" style="margin-top: 10px;">
        <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible hide-cls hide_after_interval" role="alert" style="margin-top: 10px;">
        <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session()->get('error') }}
    </div>
    @endif
  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">

      <img src="{{url('public/assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">TL(Sales) Admin</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="{{url('public/assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info">

          <a href="#" class="d-block">Welcome {{strtoupper(auth()->guard('admin')->user()->name)}}</a>

        </div>

      </div>



      <!-- SidebarSearch Form -->

      <div class="form-inline">

        <div class="input-group" data-widget="sidebar-search">

          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

          <div class="input-group-append">

            <button class="btn btn-sidebar">

              <i class="fas fa-search fa-fw"></i>

            </button>

          </div>

        </div>

      </div>



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">

            <a href="{{url('tlsales/dashboard')}}" class="nav-link active">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Dashboard

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

          </li>
          
          <li class="nav-item">
            <a href="{{url('tlsales/tlsales')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Client List                
              </p>
            </a>
          </li>          
          
          <li class="nav-item">
            <a href="{{route('admin.view.changePassword')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Change Password
               
              </p>
            </a>
          </li>
          <li class="nav-item">         
            <a href="{{route('admin.logout')}}"  class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout                
              </p>
            </a>
       
          </li>


        


         



          


          </li>

          

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>





  @yield('contents')





  <footer class="main-footer">

    <strong>Copyright &copy; 2022 <a href="https://techramindra.com">TechRamindra.com</a>.</strong>

    All rights reserved.

    <div class="float-right d-none d-sm-inline-block">

      <b>Version</b> 3.2.0

    </div>

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="{{url('public/assets/admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->

<script src="{{url('public/assets/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>

<!-- Bootstrap 4 -->

<script src="{{url('public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->

<script src="{{url('public/assets/admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->

<script src="{{url('public/assets/admin/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->

<script src="{{url('public/assets/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>

<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->

<script src="{{url('public/assets/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->

<script src="{{url('public/assets/admin/plugins/moment/moment.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="{{url('public/assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->

<script src="{{url('public/assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->

<script src="{{url('public/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->

<script src="{{url('public/assets/admin/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<!-- <script src="{{url('assets/admin/dist/js/demo.js')}}"></script> -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{url('public/assets/admin/dist/js/pages/dashboard.js')}}"></script>

<!-- toastr js -->
<script src="{{url('public/assets/toastr/js/toastr.min.js')}}"></script>
<!-- end toastr js -->



<!-- DataTables  & Plugins -->

<script src="{{url('public/assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/jszip/jszip.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>

<script src="{{url('public/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<!-- Page specific script -->

<script>

  $(function () {

    $(".table").DataTable({

      "responsive": false, "lengthChange": false, "autoWidth": false,"bPaginate": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
  setTimeout(() => {
    $(".hide_after_interval").hide();
  }, 5000);
  

</script>

</body>


</html>
@stack('change-password')
@stack('edit-plan')
@stack('edit-inclusion')
@stack('add-inclusion')
@stack('add-plan')
@stack('custom-scripts')

