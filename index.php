<?php
 session_start(); //memulai session
 if( isset($_SESSION['akses']) ) //mengecek session akses
{
     header('location:'.$_SESSION['akses']);
     exit();
}
 $error = '';
 if( isset($_SESSION['error']) ) { //menangani error
      $error = $_SESSION['error']; //set error
      unset($_SESSION['error']);
 } ?>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/custom/custom.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title></title>
</head>
<body>
  <div class="wrapper">
  <form class="form-signin" action="check-login.php" method="post">
    <h2 class="form-signin-heading" align="center">SILAHKAN LOGIN</h2><br />
    <input type="text" class="form-control" name="username" placeholder="Masukan Username" required/><br />
    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required/><br />
    <?php echo $error;?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  </form>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>