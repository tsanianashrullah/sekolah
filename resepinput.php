<html>
<head>
<title>Input Obat</title>
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
    <div class="kontent"><center><h2>SILAKAN INPUT DATA RESEP</h2></center>
<form action="resepproses.php" method="post" encytype="multipart/form-data">
<br><br><center><table border=0>
<tr>
    <td>ID </td>
    <td>:</td>
    <td><input type="text" name="id" size="10" maxlength=6 /></td>
  </tr>
<tr>
    <td bgcolor=#ffffff>kode Resep</td>
    <td>:</td>
    <td><input type="text" name="kd_resep" size="10" maxlength=6></td>
  </tr>
<tr>
    <td bgcolor=#ffffff>Kode Obat</td>
    <td>:</td>
    <td><input type="text" name="kd_obat" size="10" maxlength=6></td>
  </tr>
<tr>
    <td bgcolor=#ffffff>Aturan Pakai</td>
    <td>:</td>
    <td><input type="text" name="aturan_pakai" size="8" maxlength=4></td>
  </tr>
<tr>
    <td bgcolor=#ffffff>Keterangan</td>
    <td>:</td>
    <td><textarea name="ket"></textarea></td>
  </tr>
<tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data"><input type="reset" name="reset" value="Batal">
    </td>
  </tr></form>
</table></div>
    <div class="footer">
      <center><strong><marquee>Copy right & design by Ilham ramadhan XI RPL</strong></marquee><center>
    </div>
</div>
 </center>
</body>
</html>
