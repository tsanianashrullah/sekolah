<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<br><br><br><center><table border=2 bordercolor=black>';
echo '<tr><td bgcolor=#66FF66>Kode Dokter</td>
<td bgcolor=#66FF66>Nama Dokter</td>
<td bgcolor=#66FF66>Kode Poli</td>
<td bgcolor=#66FF66>SIP</td>
<td bgcolor=#66FF66>Tempat Lahir</td>
<td bgcolor=#66FF66>Tanggal Lahir</td>
<td bgcolor=#66FF66>No.Handphone</TD>
<TD bgcolor=#66FF66>Alamat</TD>
<TD bgcolor=#66FF66>Username</TD></tr>';

$sql=mysql_query("select*from dokter");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#00ffff>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[4].'</td>';
echo '<td >'.$jum[5].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[6].'</td>';
echo '<td>'.$jum[7].'</td>';
echo '<td bgcolor=#00ffff>'.$jum[8].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>