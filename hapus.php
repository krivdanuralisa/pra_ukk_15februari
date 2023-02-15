<?php
include('koneksi.php');

$id=$_GET['id'];

mysqli_query($koneksi ,"DELETE FROM tb_dvd where id_dvd='$id'");
mysqli_query($koneksi,"DELETE FROM tb_penyewa where id_dvd='$id'");


      header('location : lihat_data.php?status=sukses');
  
  ?>