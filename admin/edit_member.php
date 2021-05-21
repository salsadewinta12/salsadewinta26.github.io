<?php
session_start();
if (!isset($_SESSION["username"])) 
{
  echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];

  include('koneksi.php'); 
  $id_member = $_GET['id_member'];
  $select = mysqli_query($kon, "SELECT * FROM tb_member WHERE id_member='$id_member'") or die(mysqli_error($kon));
  $data = mysqli_fetch_assoc($select);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Modern-Wash| Laundry</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <h1>Form member</h1>
    </ul>

    <!-- Right navbar links -->
   

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
    <a href="#.html" class="brand-link">
      <img src="dist/img/a.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APKW|Laundry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
          <img src="dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Salsa dewinta</a>
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
           <li class="nav-item">
            <a href="beranda.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
            Beranda
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="member.php" class="nav-link active">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
            Data member
           </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="user.php" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                  Data user
              </p>
            </a>
              </li>
          <li class="nav-item">
            <a href="paket.php" class="nav-link ">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                  Paket Laundry
              </p>
            </a>
              </li>
              <li class="nav-item">
            <a href="outlet.php" class="nav-link  ">
            <i class="nav-icon fas fa-map-pin"></i>
              <p>
                  Outlet
           
              </p>
            </a>
              </li>
              <li class="nav-item">
              <a href="transaksi.php" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                  Data transakasi
              </p>
            </a>
          </li>
      
              <li class="nav-item">
              <a href="../logout.php"  class="btn btn-danger" role="button">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>LogOut</p>
              </a>
           </li>
        </ul>
      </nav>

        
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col">
        <h2>FORM MEMBER</h2>  
    <hr>
    <br><br>
    <form action="update_member.php" method="post">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ID_MEMBER</label>
        <div class="col-sm-10">
          <input type="text" name="id_member" class="form-control" size="4" value="<?php echo $data['id_member']; ?>" readonly="readonly" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
        </div>
      </div>
           <div class="form-group row">
        <label class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-10">
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" <?php if($data['jenis_kelamin'] == 'L'){ echo 'checked'; } ?> required>
            <label class="form-check-label">L</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'checked'; } ?> required>
            <label class="form-check-label">P</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TELEPON</label>
        <div class="col-sm-10">
          <input type="text" name="tlp" class="form-control" value="<?php echo $data['tlp']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
          <a href="member.php" class="btn btn-warning">KEMBALI</a>
        </div>
      </div>
    </form>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Main content -->
   
       </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">salsa dewinta</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>    
             

           
              
        

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
