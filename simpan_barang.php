<?php
require_once("database.php");
$data1 = $_POST['kode_barang'];
$data2 = $_POST['nama_barang'];
$data3 = $_POST['tanggal'];
$data4 = $_POST['merek'];
$data5 = $_POST['harga'];
$data6 = $_POST['jumlah'];
$data7 = $_POST['keterangan'];
$sql="Insert Into barang values(NULL,'$data1','$data2','$data3','$data4','$data5','$data6','$data7')";
// var_dump($sql);
$simpan=mysqli_query($dbconnect, $sql);
if($simpan){
    header('location:barang.php');
}
?>