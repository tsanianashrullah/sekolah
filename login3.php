
<html
<head>
<title> login </title>
</head>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$msg=$_GET['msg'];
	if(!empty($msg))
print ("$msg <br>\n");
?>
<!-- untuk menyertakan file css -->
<link href="style01.css" rel="stylesheet" type="text/css"/> 
</head>
 
<body>
 
<center><div class="pembungkus">
    <div class="header">
    </div>
 
     <div class="td">
<tr><td align=left><a href='vava.php'><img src='H.jpg' align=left></img></a></td>
<tr><td ><a href='profil.php'><img src='P.jpg' align=left></img></a></td>
<tr><td ><a href='input.php'><img src='i.jpg' align=left></img></a></td>
<tr><td ><a href='data.php'><img src='l.jpg' align=left></img></a></td>



    </div>
    <div class="navigasi">
        <tr><td width=20px><h3>*Info Kesehatan</h></td></tr>
<br><td><h4><li><a href="cara.php">Cara Alami menurunkan berat badan</a></li></h></td>
<br><td><h4><li><a href="fakta.php">Fakta - Fakta Unik</a></li></h></td>
<br><td><h4><li><a href="buruk.php">kebiasaan Buruk pemicu gemuk</a></li></h></td>
<br><td><h4><li><a href="makan.php">Makanan yang harus dihindari</a></li></h></td>


</div>
<div class="navigasi2">
      
<br><br><tr><td align='center' width=50px><img src='log.jpg' width=80%></IMG></td></tr>
    <form action = cook.php method = POST ><tr><td><font color=white>Username </td><td>:</td><td><input type = text name = pemakai></td>
<br>
<tr><td><font color=white>Password</td><td>:</td><td><input type = password name = sandi></td>
<br>
<br>
<tr><td><center><input type = submit value = Login></td></tr>

</div>
    <div class="kontent">
<center>
<h3><marquee><font size=3,5 font color=black>.:SELAMAT DATANG DI <i><font face='trajan pro' font color=red>SATARI HOSPITAL</i></font>:.</marquee></blink></h>
<img src='adm.jpg' width=500px></img>

<h5><font size=3,5 font color=black>Satari Hospital memiliki kapasitas 200 tempat tidur dan kami menyediakan fasilitas kamar perawatan yang dirancang khusus untuk memberikan kenyamanan sehingga secara psikologis dapat mempercepat proses penyembuhan pasien.<br>
Berbagai kelas perawatan yang dapat kami tawarkan meliputi:<br>
    SVIP (2 beds)<br>
    VIP (34 beds)<br>
    Utama ( 12 beds )<br>
    Kelas I (76 beds)<br>
    Kelas 2 (36 beds)<br>
    Kelas 3 (20 beds)</h><br>
Satari Hospital hadir untuk memberikan jawaban pasti atas keinginan pasien untuk mendapatkan pelayanan bermutu yang terbaik di bidang kesehatan. Mengukir identitas khas Satari Hospital memberikan pelayanan bermutu dan terbaik dengan sentuhan pribadi baik dari para dokter, perawat serta seluruh staf Rumah Sakit.<br>

<font size=3,5 font color=red>Motto</font><br>
Because we care<br>

<font size=3,5 font color=red>Visi</font><br>
Menjadi Rumah Sakit Swasta terfavorit di Bandung dengan memberikan mutu layanan medis terbaik di kelasnya..<br>

<font size=3,5 font color=red>Misi</font><br>
Menyediakan layanan medis dengan mutu terbaik dan memberikan layanan prima yang manusiawi melalui komunikasi intensif dan ekstensif</font>
</div>
<div class="footer">
      <center><strong><marquee><font color=black>Copyright  & design by Ilham,sandi,rafly dan bestman XI RPL</font></strong></marquee><center>
    </div>
</div>

 </center>
</body>
</html>
