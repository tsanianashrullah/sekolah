<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$id = $_POST['id'];
$kd_resep = $_POST['kd_resep'];
$kd_obat = $_POST['kd_obat'];
$aturan_pakai = $_POST['aturan_pakai'];
$ket = $_POST['ket'];
$sql = mysql_query("insert into resep values('$id','$kd_resep','$kd_obat','$aturan_pakai','$ket')");
if($sql)
	echo "Data berhasil disimpan";
else
	echo "Data gagal disimpan";
?>