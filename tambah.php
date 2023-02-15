<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>
<body>
<h3>Form Tambah</h3>
        <form action="proses_tambah.php" method="POST">
            <form>
            <p>
        <label for="nama_penyewa"> Nama Penyewa : </label>
        <input type="text" name="nama_penyewa" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <textarea name="alamat" row="5"></textarea>
    </p>
<p>
        <label for="genre_flm"> Genre Flm : </label>
        <input type="text" name="genre_flm" />
    </p>
    <p>
        <label for="judul_flm"> Judul Flm : </label>
        <input type="text" name="judul_flm" />
</p>
<p>
        <label for="tahun_flm"> Tahun Flm : </label>
        <input type="number" name="tahun_flm" />
</p>
<p>
        <label for="tanggal_sewa"> Tanggal Sewa : </label>
        <input type="date" name="tanggal_sewa" />
</p>
<p>
        <label for="tanggal_kembali"> Tanggal Kembali : </label>
        <input type="date" name="tanggal_kembali" />
</p>
<p>
        <label for="harga"> Harga : </label>
        <input type="number" name="harga" />
</p>
<p>
       <input type="submit" value="Tambah" name="tambah"/>
    </p>
</body>
</html>