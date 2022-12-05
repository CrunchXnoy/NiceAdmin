<?php
    session_start();
    require "koneksi.php";
    if(empty($_SESSION['email'])){
      echo "<script>window.location='pages-login.php';</script>";
    }else{
      $hasil = mysqli_query($conn,"select * from umkm WHERE email='$_SESSION[email]'");
      $result = mysqli_query($conn, "SELECT * FROM umkm");
      $row = mysqli_fetch_array($hasil);
      $sidebar = mysqli_query($conn, "SELECT * FROM sidebar");
      $qrcode = mysqli_query($conn, "SELECT * FROM qrcode qr LEFT JOIN
      umkm um ON qr.generatedby=um.id ");
      }
      
?>