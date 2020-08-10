<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['ID'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tamu where id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo"<script>alert('Data telah dihapus');</script>";
echo"<script>location='pembelian.php';</script>";
?>