<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
$jd_kunjungan = $_POST['jd_kunjungan'];
$t = $_POST['t'];
$g = $_POST['g'];
$l = $_POST['l'];
$tgl_kunjungan = $l."-".$g."-".$t;
$kd_pasien = $_POST['kd_pasien'];
$kd_dokter = $_POST['kd_dokter'];
$sql = mysql_query("insert into kunjungan values('$jd_kunjungan','$tgl_kunjungan','$kd_pasien','$kd_dokter','$jam_kunjungan')");
if($sql)
	echo "data kunjungan berhasil disimpan";
else
	echo "maaf,data gagal disimpan";
?>