<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<center><table border=1>';
echo '<tr>
<td bgcolor=#66FF66>ID</td>
<td bgcolor=#66FF66>Kode Resep</td>
<td bgcolor=#66FF66>Kode Obat</td>
<td bgcolor=#66FF66>Aturan Pakai</td>
<td bgcolor=#66FF66>keterangan</td></tr>';

$sql=mysql_query("select*from resep");

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