<!DOCTYPE html>
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<center>
<body>
    <h3>Form Tambah</h3>
        <form action="proses-tambah.php" method="POST">
            <form>
    <p>
        <label for="nama_guru"> Nama Guru : </label>
        <input type="text" name="nama_guru" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <textarea name="alamat" row="5"></textarea>
    </p>
    <p>
        <label for="jenis_kelamin"> Jenis Kelamin : </label>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-Laki </label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan </label>
    </p>
    <p>
        <label for="nama_mapel"> Nama Mapel : </label>
        <input type="text" name="nama_mapel" />
    </p>
    <p>
        <label for="ruangan"> Ruangan : </label>
        <input type="number" name="ruangan" />
    </p>
    <p>
       <input type="submit" value="Tambah" name="tambah"/>
    </p>
</form>
</center>
</body>

</html>