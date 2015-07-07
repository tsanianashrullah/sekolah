<html>
<head>
<title>Rekam Medis</title>
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
    <div class="kontent">
<center><h2>SILAKAN INPUT DATA REKAM MEDIS</h2></center>
<form action="rmproses.php" method="post" encytype="multipart/form-data">
<br><br><center><table border=0>
<tr>
    <td>Kode Rekam Medis</td>
    <td>:</td>
    <td><input type="text" name="kd_rm" size="10" maxlength=6 ></td>
  </tr>
<tr>
    <td>Kode Tindakan</td>
    <td>:</td>
    <td><input type="text" name="kd_tindakan" size="10" maxlength=6 ></td>
  </tr>
<tr>
    <td>Kode Pasien</td>
    <td>:</td>
    <td><input type="text" name="kd_pasien" size="10" maxlength=6 ></td>
  </tr>
<tr>
    <td>keluhan</td>
    <td>:</td>
    <td><textarea name="keluhan"></textarea></td>
  </tr>
  </tr>
<tr>
    <td>Diagnosa</td>
    <td>:</td>
    <td><input type="text" name="diagnosa" size="20" maxlength=11></td>
  </tr>
<tr>
    <td>Kode Resep</td>
    <td>:</td>
    <td><input type="text" name="kd_resep" size=10" maxlength=6></td>
  </tr>
<tr>
    <td>Tanggal Pemeriksaan</td>
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
    <td>Keterangan</td>
    <td>:</td>
    <td><textarea name="ket"></textarea></td>
<tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" size="15" maxlength=20 ></td>
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


