<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "pas.php";
$cookie_user = $_COOKIE['cookie_user'];
$cookie_pass = $_COOKIE['cookie_pass'];

if(empty($cookie_user))
{
$alamat = "http://127.0.0.1/sedot/login3.php";
echo "<script>alert('Silakan Melakukan Login');parent.location='login3.php';</script>";
exit ();
}
if(!password_valid($cookie_user, $cookie_pass))
{
$alamat = "http://127.0.0.1/sedot/login3.php";
echo "<script>alert('password salah');parent.location='login3.php';</script>";
exit ();
}
?>
<html
<head>
<title>Input</title>
 
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
<tabel border=2>
<tr>
<td><center><blink><h1><font face='trajan pro'>SILAKAN INPUT DATA</font></blink></h></center></td><br>
<center><td><a href="dokterinput.php"><img src='dokter.jpg'></img></a></td><br>
<td><a href="pasieninput.php"><img src='pasien.jpg'></img></a></td><br>
<td><a href="kunjunganinput.php"><img src='kunjungan.jpg'></img></a></td><br>
<td><a href="obatinput.php"><img src='obat.jpg'></img></a></td><br>
<td><a href="poliinput.php"><img src='poli.jpg'></img></a></td><br>
<td><a href="resepinput.php"><img src='resep.jpg'></img></a></td><br>
<td><a href="rminput.php"><img src='rekam.jpg'></img></a></td><br>
<td><a href="tindakaninput.php"><img src='tindakan.jpg'></img></a></td>
</tr></div>
    <div class="footer">
      <center><font size=3pt>Copy right & design by Sandi Nugraha XI RPL</font></center>
    </div>
</div>
 </center>
</body>
</html>
