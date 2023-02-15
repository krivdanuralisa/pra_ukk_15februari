<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_penyewa=$_POST['nama_penyewa'];
    $alamat=$_POST['alamat'];
    $genre_flm=$_POST['genre_flm'];
    $judul_flm=$_POST['judul_flm'];
    $tahun_flm=$_POST['tahun_flm'];
    $tanggal_sewa=$_POST['tanggal_sewa'];
    $tanggal_kembali=$_POST['tanggal_kembali'];
    $harga=$_POST['harga'];

    $sql = "INSERT INTO tb_dvd (genre_flm,judul_flm,tahun_flm,tanggal_sewa,tanggal_kembali,harga)
    VALUES ('$genre_flm','$judul_flm','$tahun_flm','$tanggal_sewa','$tanggal_kembali','$harga')"; 
    $query=mysqli_query($koneksi, $sql);

    $sql="SELECT max(id_dvd) AS dvd FROM tb_dvd LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data=mysqli_fetch_array($query);
   $dvd=$data['dvd'];

    $sql="INSERT INTO tb_penyewa (nama_penyewa,alamat,id_dvd) VALUES ('$nama_penyewa',' $alamat','$dvd')";
    $query=mysqli_query($koneksi, $sql);

    if($query){
        header('location:lihat_data.php?status=sukses');
    }else{
        header('location:lihat_data.php?status=gagal');
    }
}
?>