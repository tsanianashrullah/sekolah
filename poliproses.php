<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_poli = $_POST['kd_poli'];
$nm_poli = $_POST['nm_poli'];
$lantai = $_POST['lantai'];
$sql = mysql_query("insert into poliklinik values('$kd_poli','$nm_poli','$lantai')");
if($sql)
	echo "<script> alert('Data berhasil disimpan'); parent.location='poliinput.php';</script>";
else
	echo "<script> alert('Data Gagal disimpan'); parent.location='poliinput.php';</script>";
?>