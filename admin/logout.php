<?php
session_start();

session_destroy();

echo"<script>alert('anda Telah Logout');</script>";
echo"<script>location='index.php';</script>";
?>