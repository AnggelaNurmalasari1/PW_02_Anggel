<?php
include 'proses.php';

$nm_mhs= $_POST['nama'];
$nim= $_POST['nim'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$agama= $_POST['agama'];
$tlpn = $_POST['tlpn'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nm_mh','$nim','$alamat','$tlpn')");


header("location:index.php");