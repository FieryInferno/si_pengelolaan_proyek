<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= strtoupper(session('role')) . ' - ' . $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css//daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/summernote-bs4.min.css">
  
  <link rel="stylesheet" href="<?= base_url(); ?>/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/datatables/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/datatables/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <div class="animation__shake"><h1>Sistem Pengelolaan Proyek</h1></div>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= strtoupper(session('role')); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php
              switch (session('role')) {
                case 'admin': ?>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/proyek" class="nav-link <?= $title == 'Proyek' ? 'active' : ''; ?>">
                      <i class="nav-icon fas fa-th"></i>
                      <p>Kelola Data Proyek</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/pegawai" class="nav-link <?= $title == 'Pegawai' ? 'active' : ''; ?>">
                    <i class="nav-icon fas fa-copy"></i>
                      <p>Kelola Akun Pegawai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/register" class="nav-link <?= $title == 'Register' ? 'active' : ''; ?>">
                    <i class="nav-icon fas fa-chart-pie"></i>
                      <p>Register Proyek</p>
                    </a>
                  </li>
                  <?php break;

                case 'pj': ?>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/pj" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/pj/proyek" class="nav-link <?= $title == 'Proyek' ? 'active' : ''; ?>">
                      <i class="nav-icon fas fa-th"></i>
                      <p>Kelola Data Proyek</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>/pj/register" class="nav-link <?= $title == 'Register' ? 'active' : ''; ?>">
                    <i class="nav-icon fas fa-chart-pie"></i>
                      <p>Register Proyek</p>
                    </a>
                  </li>
                  <?php break;
                
                default:
                  # code...
                  break;
              }
            ?>
            <li class="nav-item">
              <a class="nav-link btn btn-danger" style="text-align: inherit;" data-toggle="modal" data-target="#logout">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    
    <?php echo view($konten); ?>

    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah anda yakin akan keluar dari aplikasi?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?= base_url(); ?>/logout" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url(); ?>/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url(); ?>/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>/datatables/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>/datatables/buttons.colVis.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url(); ?>/js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url(); ?>/js/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url(); ?>/js/jquery.vmap.min.js"></script>
  <script src="<?= base_url(); ?>/js/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url(); ?>/js/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url(); ?>/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>/js/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url(); ?>/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url(); ?>/js/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url(); ?>/js/dashboard.js"></script>
  <script>
    $(function () {
      if ('<?= $title; ?>' !== 'Dashboard') {
        $("#datatable").DataTable({
          "responsive"    : true, 
          "lengthChange"  : false, 
          "autoWidth"     : false,
          "buttons"       : ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
      }
    });
  </script>
</body>
</html>
