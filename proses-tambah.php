<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $nama_mapel=$_POST['nama_mapel'];
    $ruangan=$_POST['ruangan'];
    
    $sql="INSERT INTO tb_mapel(nama_mapel, ruangan) VALUES ('$nama_mapel', '$ruangan')"; 
    $query=mysqli_query($koneksi,$sql);

    $sql="SELECT max(kode_mapel) AS mapel_kode FROM tb_mapel LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $mapel_kode=$data['mapel_kode'];

    $sql="INSERT INTO tb_guru(nama_guru, alamat, jenis_kelamin, kode_mapel) VALUES ('$nama_guru','$alamat','$jenis_kelamin','$mapel_kode')";
    $query=mysqli_query($koneksi,$sql);


    if($query){
        header('location:lihat_data.php?status=sukses');
    }else{
        header('location:lihat_data.php?status=gagal');
    }
}
?>