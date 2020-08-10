
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>HALAMAN ADMIN</title>
	<link rel="shortcut icon" href="kopi.ico" />
  </head>
  <body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li><a class ="nav-link active" href="logout.php" tabindex="-1" aria-disabled="false" onclick="return confirm('Anda Yakin Mau Logout?');">Logout</a></li>
    </ul>

  </div>
</nav>
    <!-- end navbar -->
  <!-- jumbotron -->
<head>
<title>Data Pengunjung</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
  background-image:url(img/kopi.jpg);
}
-->
</style>
</head>

<body>
<?php
include('koneksi.php'); 
?>
<html>
<head>
<title>Tampilan</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$sql	= 'select * from tamu';
$query	= mysqli_query($koneksi,$sql);
?>
<h2><strong>
</strong></h2>
<h1 align="center">Data Pengunjung</h1>
<h1><strong></strong>
</h1>
<br></br>
<table width="1250" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
	<td width="86" height="29" align="center" valign="middle" bgcolor="#00FFFF">No.</td>
	<td width="300" height="29" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="400" height="29" align="center" valign="middle" bgcolor="#00FFFF">Email</td>
    <td width="500" align="center" valign="middle" bgcolor="#00FFFF">Pesan</td>
	<td width="168" align="center" valign="middle" bgcolor="#00FFFF">Tanggal</td>
	<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Aksi</td>
  </tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
<tr>
	<td height="30" align="center" bgcolor="#FFFFFF" p><?php echo $data['id']; ?></td>
	<td height="30" align="center" bgcolor="#FFFFFF" p><?php echo $data['nama']; ?></td>
    <td height="30" align="center" bgcolor="#FFFFFF" p><?php echo $data['email']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['pesan']; ?></td>
	<td p align="center" bgcolor="#FFFFFF"><?php echo $data['tanggal']; ?></td>

    
    <td p align="center" bgcolor="#FFFFFF">
	<a class ="btn btn-xs btn-danger" href="delete.php?act=hapus&ID=<?php echo $data['id'];?>" onClick="return confirm('Apakah anda yakin data ini akan di hapus secara permanen?');"> Hapus </a>
	</td>
  </tr>
<?php
}
?>
</table>
<br />
</body>
</html>