<?php
include("koneksi.php");

$id = $_GET['id_guru'];

$sql= "DELETE FROM tb_mapel where kode_mapel='$id'";
$query = mysqli_query($koneksi,$sql);

$sql= "DELETE FROM tb_guru where id_guru='$id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header("Location:lihat_data.php?status=sukses");
}else{
    die("akses dilarang");
}
?>