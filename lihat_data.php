<?php
include("koneksi.php");
?>

 <h1>Data Penyewaan DVD Skansay </h1>
  <a href=index.php><input type = "button" value="Kembali"></a>
  <a href=tambah.php><input type = "button" value="Tambah"></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Penyewa</th>
        <th>Alamat</th>
        <th>Genre Film</th>
        <th>Judul Film</th>
        <th>Tahun Film</th>
        <th>Tanggal Sewa</th>
        <th>Tangga Kembali</th>
        <th>Harga</th>
    </tr>
    <?php
include("koneksi.php");
$sql="SELECT * FROM tb_dvd INNER JOIN tb_penyewa ON tb_dvd.id_dvd=tb_penyewa.id_dvd";
$query=mysqli_query($koneksi,$sql);
   
while($row=mysqli_fetch_array($query)){

          echo "<tr>";
          echo "<td>".$row['id_dvd']."</td>";
          echo "<td>".$row['nama_penyewa']."</td>";
          echo "<td>".$row['alamat']."</td>";
          echo "<td>".$row['genre_flm']."</td>";
          echo "<td>".$row['judul_flm']."</td>";
          echo "<td>".$row['tahun_flm']."</td>";
          echo "<td>".$row['tanggal_sewa']."</td>";
          echo "<td>".$row['tanggal_kembali']."</td>";
          echo "<td>".$row['harga']."</td>";
          
          echo "<td>";
          echo "<a href='edit.php?id_penyewa=".$row['id_penyewa']."'>Edit</a> |";
          echo "<a href='hapus.php?id_penyewa=".$row['id_penyewa']."'>Hapus</a> ";
          echo "</td>";
          echo "</tr>";
     }
     ?>
     </table>
    </body>
    </html>