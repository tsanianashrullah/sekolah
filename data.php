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
exit ();
}
if(!password_valid($cookie_user, $cookie_pass))
{
$alamat = "http://127.0.0.1/sedot/login3.php";
echo "<script>alert('Password Salah');parent.location='login3.php';</script>";
exit ();
}
?>
<html
<head>
<title>Data</title>
 
<!-- untuk menyertakan file css -->
<link href="style12.css" rel="stylesheet" type="text/css" /> 
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
<tabel border=1>

<td><center><blink><h1><font face='trajan pro'>LIHAT DATA</font></blink></h></center></td><br>
<center><td><a href="dokteroutput.php"><img src='dokter.jpg'></img></a></td><br>
<td><a href="pasienoutput.php"><img src='pasien.jpg'></img></a></td><br>
<td><a href="kunjunganoutput.php"><img src='kunjungan.jpg'></img></a></td><br>
<td><a href="obatoutput.php"><img src='obat.jpg'></img></a></td><br>
<td><a href="polioutput.php"><img src='poli.jpg'></img></a></td><br>
<td><a href="resepoutput.php"><img src='resep.jpg'></img></a></td><br>
<td><a href="rmoutput.php"><img src='rekam.jpg'></img></a></td><br>
<td><a href="tindakanoutput.php"><img src='tindakan.jpg'></img></a></td>
</tr></div>
    <div class="footer">
      <center><font size=3pt>Copy right & design by Raden Rafly XI RPL</font></center>
    </div>
</div>
 </center>
</body>
</html>