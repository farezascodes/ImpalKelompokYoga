<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('pegawai-manager/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('pegawai-manager/css/sb-admin.css'); ?>" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div id="notif"></div>
      <div class="card-body">
        <form id="LoginPegawai-form" method="post" action="http://localhost/ImpalKelompokYoga/index.php/Login_Peg_Control/login" role="form">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('pegawai-manager/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('pegawai-manager/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('pegawai-manager/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('pegawai-manager/js/ajax-LoginPegawai.js'); ?>"></script>

</body>

</html>