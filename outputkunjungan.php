<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<center><table border=1 bordercolor=black>';
echo '<tr><td bgcolor=#66FF66>Jadwal Kunjungan</td>
<td bgcolor=#66FF66>Tanggal Kunjungan</td>
<td bgcolor=#66FF66>Kode Pasien</td>
<td bgcolor=#66FF66>Kode Dokter</td>
<td bgcolor=#66FF66>Jam Kunjungan</td>';

$sql=mysql_query("select*from kunjungan");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#00ffff>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[4].'</td>';
echo '</tr>';
}

echo '</table></center>';

?>