<?php
$host="localhost";
$user_db="root";
$pass_db="";
$db="resume";
$db2 = new mysqli($host, $user_db, $pass_db, $db);
$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
?>