<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_pasien = $_POST['kd_pasien'];
$nm_pasien = $_POST['nm_pasien'];
$j_kel = $_POST['j_kel'];
$j_keluarga = $_POST['j_keluarga'];
$alamat = $_POST['alamat'];
$tempat_lhr = $_POST['tempat_lhr'];
$t = $_POST['t'];
$g = $_POST['g'];
$l = $_POST['l'];
$tgl_lhr = $l."-".$g."-".$t;
$no_tlp = $_POST['no_tlp'];
$usia = $_POST['usia'];
$nm_kk = $_POST['nm_kk'];
$hub_kel = $_POST['hub_kel'];
$sql = mysql_query("insert into pasien values('$kd_pasien','$nm_pasien','$j_kel','$j_keluarga','$alamat','$tempat_lhr','$tgl_lhr','$usia','$no_tlp','$nm_kk','$hub_kel')");
if($sql)
	echo "<script> alert('Data berhasil disimpan'); parent.location='pasieninput.php';</script>";
else
	echo "<script> alert('Data Gagal disimpan'); parent.location='pasieninput.php';</script>";
?>