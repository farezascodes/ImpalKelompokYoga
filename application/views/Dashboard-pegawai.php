<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Pegawai</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('pegawai-manager/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('pegawai-manager/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('pegawai-manager/css/sb-admin.css'); ?>" rel="stylesheet">

  <!-- sweet alert -->
  <link href="<?php echo base_url('sweet-alert/dist/sweetalert2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Dashboard pegawai</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>



    <!-- Navbar -->
    <ul class="navbar-nav mr-auto mr-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link a-dashboard" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Cek kode booking</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <h2 style="margin-left: 2%;">Cek kode booking pelanggan</h2>
      <div id="notif"></div>
      <div class="container-fluid">
        <div class="row">

          <!-- Navbar Search -->
          <form method="post" action="http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C/cekkode" id="cek-kode" class="offset-md-4">
            <div class=" input-group-text input-group-lg md-3 my-2 my-md-5">
              <input type="text" name="cek-kobook" class="form-control" placeholder="Cari kode booking">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>

        </div>

        <div class=" card row mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Data customer</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Booking</th>
                    <th>Username</th>
                    <th>Layanan</th>
                    <th>Status Bayar</th>
                    <th>Jam Pelayanan</th>
                    <th>Tanggal Pelayanan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="isi-tabel"></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/LOGIN_PEG_CONTROL'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo base_url('pegawai-manager/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('pegawai-manager/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('pegawai-manager/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('pegawai-manager/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('pegawai-manager/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('pegawai-manager/js/sb-admin.min.js'); ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('pegawai-manager/js/demo/datatables-demo.js'); ?>"></script>

  <!-- sweet alert -->
  <script src="<?php echo base_url('sweet-alert/dist/sweetalert2.min.js'); ?>" ></script>

  <!-- ajax -->
  <script src="<?php echo base_url('pegawai-manager/js/ajax-cekBooking.js'); ?>"></script>

</body>

</html>