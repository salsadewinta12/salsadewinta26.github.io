<?php
  include "koneksi.php";
?>
<?php
    $sql = "SELECT * FROM tb_outlet";
  $query = mysqli_query($kon,$sql);
  $count = mysqli_num_rows($query);
?>
<?php
    $sql_m = "SELECT * FROM tb_member";
  $query_m = mysqli_query($kon,$sql_m);
  $count = mysqli_num_rows($query_m);
?>
<?php
    $sql_u = "SELECT * FROM tb_user";
  $query_u = mysqli_query($kon,$sql_u);
  $count = mysqli_num_rows($query_u);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modern-Wash | Laundry</title>

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
      <li class="nav-item d-none d-sm-inline-block">
        <h1>FORM DATA TRANSAKSI</h1>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    

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
            <a href="member.php" class="nav-link">
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
            <a href="outlet.php" class="nav-link">
            <i class="nav-icon fas fa-map-pin"></i>
              <p>
                  Outlet
           
              </p>
            </a>
              </li>
              <li class="nav-item">
              <a href="transaksi.php" class="nav-link active">
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
              <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
    <!-- /.content -->
    <!-- Main content -->
            <div class='form'><form method='post' action='simpan_transaksi.php' class='cmxform form-horizontal tasi-form' id='commentForm'>
  
           

        <div class="form-group ">
        <label for="id_outlet" class="control-label col-lg-2"> ID Outlet</label>
        <div class="col-lg-10">
            <select class="form-control" name="id_outlet" required >
                <option>ID Outlet</option>
                    <?php
                        while ($data = mysqli_fetch_array($query))
                        {
                      ?>
                <option> <?php echo $data['id_outlet']; ?> </option>
                       <?php
                        } 
                      ?>
            </select>
        </div>
        </div>
                
              <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Kode Invoice</label>
                <div class='col-lg-10'>
                  <input type='text' class='form-control' name='kode_invoice' required>
                </div>
                </div>
  
                
                  <div class="form-group ">
                      <label for="id_member" class="control-label col-lg-2"> ID Member</label>
                      <div class="col-lg-10">
                          <select class="form-control" name="id_member" required >
                              <option>ID Member</option>
                                  <?php
                                      while ($data = mysqli_fetch_array($query_m))
                                      {
                                    ?>
                              <option> <?php echo $data['id_member']; ?> </option>
                                     <?php
                                      } 
                                    ?>
                          </select>
                </div>
                </div>

  
 

                <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $tgl = date('Y-m-d H:i:s');
                    $batas = date('Y-m-d H:i:s',strtotime('+3 days', strtotime($tgl)));
                ?>

                <div class='form-group'>
               <label for='cname' class='control-label col-lg-2'>Tanggal</label>
              <div class='col-lg-5'>
                <input type='date' value="<?php echo $tgl ?>" class='form-control' name='tgl' required>
              </div>
              </div>

              
                <div class='form-group'>
               <label for='cname' class='control-label col-lg-2'>Batas Waktu</label>
              <div class='col-lg-5'>
                <input type='date' value="<?php echo $tgl ?>" class='form-control' name='batas_waktu' required>
              </div>
              </div>

                 <div class='form-group'>
               <label for='cname' class='control-label col-lg-2'>Tanggal bayar</label>
              <div class='col-lg-5'>
                <input type='date' value="<?php echo $tgl ?>" class='form-control' name='tgl_bayar' required>
              </div>
              </div>


              <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Biaya Tambahan</label>
                <div class='col-lg-11'>
                  <input type='text' class='form-control' name='biaya_tambahan' required>
                </div>
                </div>

  
              <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Diskon</label>
                <div class='col-lg-10'>
                  <input type='text' class='form-control' name='diskon' required>
                </div>
                </div>

              <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>pajak</label>
                <div class='col-lg-11'>
                  <input type='text' class='form-control' name='pajak' required>
                </div>
                </div>
             

                <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Status</label>
                <div class='col-lg-10'>
                  <select class='form-control' name="status">
                      <option value="">-Pilih Status -</option>
                  <option value="baru">Baru</option>
                  <option value="proses">Proses </option>
                  <option value="selesai">Selesai </option>
                  <option value="diambil">diambil </option>
                  </select>
                </div>
                </div>

                  <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Pembayaran</label>
                <div class='col-lg-10'>
                  <select class='form-control' name="dibayar">
                      <option value="">-Pilih Status Pembayaran-</option>
                  <option value="dibayar">Di Bayar</option>
                  <option value="belum_dibayar">Belum Dibayar</option>
                  </select>
                </div>
                </div>

              <div class="form-group ">
                  <label for="id_user" class="control-label col-lg-2"> ID User</label>
                  <div class="col-lg-10">
                      <select class="form-control" name="id_user" required >
                          <option>ID User</option>
                              <?php
                                  while ($data = mysqli_fetch_array($query_u))
                                  {
                                ?>
                          <option> <?php echo $data['id_user']; ?> </option>
                                 <?php
                                  } 
                                ?>
                      </select><br>

                   </div>
                </div>
                    
<div class='form-group'>
    <div class='col-lg-offset-2 col-lg-10'>
        <button class='btn btn-primary waves-effect waves-light' type='submit'>Tambah</button>
    <a class='btn btn-danger' href='transaksi.php'>Batal</a>
    </div>
</div>
</form>
</div>
            <!-- Custom tabs (Charts with tabs)-->
          
         </div><!-- /.container-fluid -->
    </section>       

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
