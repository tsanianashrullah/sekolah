<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");

echo'<link href=tabel.css rel=stylesheet type=text/css> ';
echo '<center><table border=2 background-color=#393>';
echo '<tr><td bgcolor=#33FFCC><strong>Kode Obat </strong></td><td bgcolor=#33FFCC><strong> Nama Obat </strong></td><td bgcolor=#33FFCC><strong> Jumlah Obat </strong> </td><td bgcolor=#33FFCC><strong>Ukuran</strong></td></tr>';

$sql=mysql_query("select*from obat");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#99FFFF>'.$jum[0].'</td>';
echo '<td bgcolor=#99FFFF>'.$jum[1].'</td>';
echo '<td bgcolor=#99FFFF>'.$jum[2].'</td>';
echo '<td bgcolor=#99FFFF>'.$jum[3].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>