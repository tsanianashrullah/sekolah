<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$kd_dokter = $_POST['kd_dokter'];
$nm_dokter = $_POST['nm_dokter'];
$kd_poli = $_POST['kd_poli'];
$sip = $_POST['sip'];
$tempat_lhr = $_POST['tempat_lhr'];
$t = $_POST['t'];
$g = $_POST['g'];
$l = $_POST['l'];
$tgl_lhr = $l."-".$g."-".$t;
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$sql = mysql_query("insert into dokter values('$kd_dokter','$nm_dokter','$kd_poli','$sip','$tempat_lhr','$tgl_lhr','$no_hp','$alamat','$username')");
if($sql)
	echo "Data Dokter Berhasil disimpan";
else
	echo "Maaf, Data gagal disimpan";
?>