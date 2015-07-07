<html>
<head>
<title>Input Data kunjungan</title>
</head>
<body>
<!-- untuk menyertakan file css -->
<link href="style11.css" rel="stylesheet" type="text/css" /> 
</head>
 
<body>
 
<center><div class="pembungkus">
    <div class="header">
    </div>
 
     <div class="td">
<tr><td ><a href='vava.php'><img src='H.jpg'></img></a></td>
<tr><td ><a href='profil.php'><img src='P.jpg'></img></a></td>
<tr><td ><a href='input.php'><img src='i.jpg'></img></a></td>
<tr><td ><a href='data.php'><img src='l.jpg'></img></a></td>
<tr><td ><a href='logout.php'><img src='lo.jpg'></img></a></td>
</div>
<div class="navigasi2">
</div>
<div class="kontent"><center><h2>SILAKAN INPUT DATA KUNJUNGAN</h2></center>
<form action="kunjunganproses.php" method="post" encytype="multipart/form-data">
<br><br><center><table border=0>
<tr>
    <td>Jadwal Kunjungan</td>
  	<td>:</td><td><SELECT name="jd_kunjungan">
		<OPTION VALUE="Senin">Senin</OPTION>
		<OPTION VALUE="Selasa">Selasa</OPTION>
		<OPTION VALUE="Rabu">Rabu</OPTION>
		<OPTION VALUE="Kamis">Kamis</OPTION>
		<OPTION VALUE="Jum'at">Jum'at</OPTION>
		<OPTION VALUE="Sabtu">Sabtu</OPTION>
		<OPTION VALUE="minggu">minggu</OPTION></tr></select>
<tr>

<td>Tanggal Kunjungan</td>
    <td>:</td> <td>tanggal : <select name="t">
<?php

for($i=1;$i<=31;$i++)
{
  echo "<option value=$i>$i</option>";
}
?></select>
bulan : <select name="g">
<?php
for($i=1;$i<=12;$i++)
{
  echo "<option value=$i>$i</option>";
}

?>
</select>
tahun : <select name="l"> 
<?php
for($i=2014;$i>=1945;$i--)
{
  echo "<option value=$i>$i</option>";
}

?></select>
</TD> 
</TR>
</tr>
<tr>
    <td>Kode Pasien</td>
    <td>:</td>
    <td><input type="text" name="kd_pasien" size="10" maxlength=6 ></td>
  </tr>
<tr>
    <td>Kode Dokter</td>
    <td>:</td>
    <td><input type="text" name="kd_dokter" size="10" maxlength=6 ></td>
  </tr>
  </tr>
<tr>
    <td>Jam Kunjungan</td>
    <td>:</td>
    <td><input type="text" name="jam_kunjungan" size="10" maxlength=6 ></td>
  </tr>
  </tr>
<tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data"><input type="reset" name="reset" value="Batal">
    </div></td>
  </tr>
</form>
</table>
</div>
    <div class="footer">
      <center><strong><marquee>Copy right & design by Ilham ramadhan XI RPL</strong></marquee><center>
    </div>
</div>
 </center>
</body>
</html>
