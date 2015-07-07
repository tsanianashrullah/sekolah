<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<center><table border=1>';
echo '<tr><td bgcolor=#66FF66>Kode rekam Medis</td>
<td bgcolor=#66FF66>Kode Tindakan</td>
<td bgcolor=#66FF66>Kode Pasien</td>
<td bgcolor=#66FF66>Keluhan</td>
<td bgcolor=#66FF66>Diagnosa</td>
<td bgcolor=#66FF66>Kode Resep</td>
<td bgcolor=#66FF66>Tanggal Pemeriksaan</TD>
<TD bgcolor=#66FF66>Keterangan</TD>
<TD bgcolor=#66FF66> Username</TD></tr>';

$sql=mysql_query("select*from rmedis");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#00ffff>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[4].'</td>';
echo '<td>'.$jum[5].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[6].'</td>';
echo '<td>'.$jum[7].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[8].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>