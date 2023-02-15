<?php
include("koneksi.php");
if(!isset($_GET['id_penyewa'])){
    header("Location:lihat_data.php?");
}
$id=$_GET['id_penyewa'];
$sql="SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd= tb_dvd.id_dvd WHERE tb_penyewa.id_penyewa='$id'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($query);
?>

<html>
    <head>
</head>
<body>
    <h1>From Edit Sewa</h1>
    <form action="proses-edit.php" method="POST">
    <a href="lihat_data.php"><input type="button" value="kembali"></a>
        <fieldset>
            <input type="hidden" name="id_penyewa" value="<?php echo $row ['id_penyewa']?>" />

        <p>
            <label for="nama_penyewa"> Nama Penyewa: </label>
            <input type="text" name="nama_penyewa" value="<?php echo $row ['nama_penyewa']?>"/>
        </p>

        <p>
            <label for="alamat"> Alamat: </label>
            <input type="text" name="alamat" value="<?php echo $row ['alamat']?>"/>
        </p>

        <p>
            <label for="genre_flm"> Genre Flm </label>
            <input type="text" name="genre_flm" value="<?php echo $row ['genre_flm']?>"/>
        </p>

        <p>
            <label for="judul_flm"> Judul Flm: </label>
            <input type="text" name="judul_flm" value="<?php echo $row ['judul_flm']?>"/>
        </p>

        <p>
            <label for="tahun_flm"> Tahun Flm: </label>
            <input type="number" name="tahun_flm" value="<?php echo $row ['tahun_flm']?>"/>
        </p>

        <p>
            <label for="tanggal_sewa"> Tanggal Sewa: </label>
            <input type="date" name="tanggal_sewa"  value="<?php echo $row ['tanggal_sewa']?>"/>
        </p>

        <p>
            <label for="tanggal_kembali"> Tanggal Kembali: </label>
            <input type="date" name="tanggal_kembali"  value="<?php echo $row ['tanggal_kembali']?>"/>
        </p>

        <p>
            <label for="harga"> Harga </label>
            <input type="number" name="harga"  value="<?php echo $row ['harga']?>"/>
        </p>

        <p>
        <input type="submit" name="edit" value="edit" />
        </p>

</fieldset>
</form>
</body>
</html>