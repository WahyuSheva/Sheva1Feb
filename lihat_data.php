<!DOCTYPE html>
<html>
<head>
 <title>Mapel</title>
 <center>
 <h1>Data Mapel</h1>
 <a href="index.php"><input type="button" value="Kembali"></a>
 <a href="tambah.php"><input type="button" value="Tambah"></a>
</head>

<body>

 <table border="1">
  <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Nama Mapel</th>
            <th>Ruangan</th>
            <th>Aksi</th>
  </tr>
  
  <?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel");

  $no = 1;
  foreach ($query as $row) :
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_guru']; ?></td> 
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['jenis_kelamin']; ?></td>
    <td><?= $row['nama_mapel']; ?></td>
    <td><?= $row['ruangan']; ?></td>
    <td>
        <a href="edit.php?id_guru=<?= $row['id_guru']; ?>">Edit</a>||
        <a href="hapus.php?id_guru=<?= $row['id_guru']; ?>">Hapus</a>
    </td>
   </tr>

  <?php endforeach; ?>

 </table>
</body>
  </center>
</html>