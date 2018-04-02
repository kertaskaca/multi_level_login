<?php
session_start(); //memulai session
if( !isset($_SESSION['saya_manager']) ) //jika session login bukan manager
{
 header('location:./../'.$_SESSION['akses']); //alihkan berdasarkan hak akses
 exit();
}
$nama = ( isset($_SESSION['nama_u']) ) ? $_SESSION['nama_u'] : '';
?>

<html>
<head>
 <title>MANAGER</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
 <!-- INI ADALAH HEADER -->
    <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="http://www.kakadev.com">Kertas Kaca Development</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="http://www.kakadev.com">Beranda</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="./../logout.php">Logout</a></li>
           </ul>
         </div>
       </div>
     </nav>
  <br><br><br><br><br>


  <!-- INI ADALAH TAMPILAN MENU UTAMA -->
     <div class="container">
       <div class="jumbotron">
         <h1>Hallo Selamat Datang <small><?php echo $nama;?></small></h1><br>
         <p>Anda telah login sebagai manager, dan anda sekarang ada di dashboard manager.</p><br />
     <p>Anda sedang belajar membuat login menggunakan session sederhana berbasis PHP MySQLi dan Bootstrap.</p>
           <a class="btn btn-lg btn-primary" href="http://www.kioscoding.com" role="button">Lihat Tutorial Lainnya &raquo;</a>
         </p>
       </div>

     </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>