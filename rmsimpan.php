<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_rm= $_POST['kd_rm'];
$kd_tindakan= $_POST['kd_tindakan'];
$kd_pasien= $_POST['kd_pasien'];
$keluhan= $_POST['keluhan'];
$diagnosa= $_POST['diagnosa'];
$kd_resep= $_POST['kd_resep'];
$t = $_POST['t'];
$g = $_POST['g'];
$l = $_POST['l'];
$tgl_pemeriksaan = $l."-".$g."-".$t;
$ket= $_POST['ket'];
$username= $_POST['username'];
$sql = mysql_query("insert into rmedis values('$kd_rm','$kd_tindakan','$kd_pasien','$keluhan','$diagnosa','$kd_resep','$tgl_pemeriksaan','$ket','$username')");
if($sql)
	echo "Data berhasil disimpan";
else
	echo "Data Gagal disimpan";
?>