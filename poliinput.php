<html>
<head>
<title>Input Data poliklinik</title>
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
<center><h2>SILAKAN INPUT DATA POLIKLINIK</h2></center>
<form action="poliproses.php" method="post" encytype="multipart/form-data">
<br><br><center><table border=0>
<tr>
    <td>Kode Poliklinik</td>
    <td>:</td> <td><input type="text" name="kd_poli" size=6 maxlength=6></td>
<tr>
    <td>Nama Poliklinik</td>
    <td>:</td>
    <td><select name="nm_poli"> 
		<OPTION VALUE="poli gigi">poli gigi</OPTION>
		<OPTION VALUE="poli mata">poli mata</OPTION>
		<OPTION VALUE="poli bedah">poli bedah</OPTION>
		<OPTION VALUE="poli anak">anak</OPTION>
		<OPTION VALUE="umum">umum</OPTION></tr></select>
<tr></td>
  </tr>
<tr>
    <td>Lantai</td>
    <td>:</td> <td><select name="lantai">
<?php

for($i=1;$i<=6;$i++)
{
  echo "<option value=$i>$i</option>";
}
?>
</select>
</TD> 
</TR>
</tr>
<tr>
  
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
