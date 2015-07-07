<html>
<head>
<title>Input Data Dokter</title>
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
<div class="kontent">
<center><h2>SILAKAN INPUT DATA DOKTER</h2>
<br>
<br>

<center><form action="dokterproses.php" method="post" encytype="multipart/form-data">
<table border=0 >
<tr border=2px>
    <td b>Kode Dokter</td>
    <td>:</td>
    <td><input type="text" name="kd_dokter" size="10" maxlength=6 /></td>
  </tr>
<tr>
    <td>Nama dokter</td>
    <td>:</td>
    <td><input type="text" name="nm_dokter" size="30" maxlength=25></td>
  </tr>
<tr>
    <td>Kode Poli</td>
    <td>:</td>
    <td><input type="text" name="kd_poli" size="10" maxlength=6></td>
  </tr>
<tr>
    <td>SIP</td>
    <td>:</td>
    <td><input type="text" name="sip" size="10" maxlength=6></td>
</tr>
<tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat_lhr" size="20" maxlength=15 ></td>
  </tr>
<tr>
<td>Tanggal Lahir</td>
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
    <td>No Handphone</td>
    <td>:</td>
    <td><input type="text" name="no_hp" size="15" maxlength=13 ></td>
  </tr>
<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea name="alamat"></textarea></td>
<tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" size="15" maxlength=20 ></td>
  </tr>
  </tr>
<tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data">
<input type="reset" name="reset" value="Batal">
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
