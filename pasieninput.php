<html>
<head>
<title>Input Data Pasien</title>
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
    <div class="kontent"><center><h2>SILAKAN INPUT DATA PASIEN</h2></center>
<form action="pasienproses.php" method="post" encytype="multipart/form-data">
<br><center><table border=0>
<tr>
    <td><strong>Kode Pasien</strong></td>
    <td>:</td>
    <td><input type="text" name="kd_pasien" size="10" maxlength=6 /></td>
  </tr>
<tr>
    <td><strong>Nama Pasien</strong></td>
    <td>:</td>
    <td><input type="text" name="nm_pasien" size="30" maxlength=25></td>
  </tr>
<tr>
    <td><strong>Jenis Kelamin</strong></font></td>
    <td>:</td>
    <td><select name="j_kel">
<option value="laki-laki">laki-laki</option>
<option value="perempuan">Perempuan</option></td>
  </tr>
<tr>
    <td><strong>Jumlah Keluarga</strong></font></td>
    <td>:</td>
    <td><input type="text" name="j_keluarga" size="5" maxlength=3></td>
  </tr>
<tr>
    <td><strong>Alamat</strong></font></td>
    <td>:</td>
    <td><textarea name="alamat"></textarea></td>
<tr>
    <td><strong>Tempat Lahir</strong></font></td>
    <td>:</td>
    <td><input type="text" name="tempat_lhr" size="20" maxlength=15 ></td>
  </tr>
<tr>
<td><strong>Tanggal Lahir</strong></font></td>
    <td>:</td> <td>
tanggal : <select name="t">
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
    <td><strong>Usia</strong></font></td>
    <td>:</td>
    <td><input type="text" name="usia" size="5" maxlength=3 ></td>
  </tr>
<tr>
    <td><strong>No Telephone</strong></font></td>
    <td>:</td>
    <td><input type="text" name="no_tlp" size="15" maxlength=13></td>
<tr>
    <td><strong>Nama Kepala Keluarga</strong></font></td>
    <td>:</td>
    <td><input type="text" name="nm_kk" size="20" maxlength=25 ></td>
  </tr>
  </tr>
<tr>
	<td><strong>Hubungan Keluarga</strong></font></td> <td>:</td><td><SELECT name="hub_kel">
		<OPTION VALUE="Ayah">Ayah</OPTION>
		<OPTION VALUE="Ibu">Ibu</OPTION>
		<OPTION VALUE="Anak">Anak</OPTION>
		<OPTION VALUE="Saudara">Saudara</OPTION>
		<OPTION VALUE="lain-lain">lain-lain</OPTION></tr></select>
<tr>

    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data"><input type="reset" name="reset" value="Batal">
    </div></td>
  </tr>
</form>
</table>
</div>
    <div class="footer">
      <center><strong><marquee>Copyright  & design by Ilham,sandi,rafly dan basement XI RPL</strong></marquee><center>
    </div>
</div>
 </center>
</body>
</html>

