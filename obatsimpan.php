<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_obat = $_POST['kd_obat'];
$nm_obat = $_POST['nm_obat'];
$jml_obat = $_POST['jml_obat'];
$ukuran = $_POST['ukuran'];
$sql = mysql_query("insert into obat values('$kd_obat','$nm_obat','$jml_obat','$ukuran')");
if($sql)
	echo "Data Obat Berhasil disimpan";
else
	echo "Maaf, Data gagal disimpan";
?>