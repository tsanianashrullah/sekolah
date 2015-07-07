<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_tindakan = $_POST['kd_tindakan'];
$nm_tindakan = $_POST['nm_tindakan'];
$ket = $_POST['ket'];
$sql = mysql_query("insert into tindakan values('$kd_tindakan','$nm_tindakan','$ket')");
if($sql)
	echo "<script> alert('Data berhasil disimpan'); parent.location='tindakaninput.php';</script>";
else
	echo "<script> alert('Data Gagal disimpan'); parent.location='tindakaninput.php';</script>";
?>