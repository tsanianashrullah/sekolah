<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<center><table border=1>';
echo '<tr>
<td bgcolor=#66FF66>Kode Poliklinik</td>
<td bgcolor=#66FF66>Nama Poliklinik</td>
<td bgcolor=#66FF66>Lantai</td></tr>';

$sql=mysql_query("select*from poliklinik");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#00ffff>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[2].'</td>';
echo '</tr>';
}

echo '</table></center>';

?>