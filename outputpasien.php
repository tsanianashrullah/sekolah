<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("sedot");
echo '<center><table border=1 bordercolor=black>';
echo '<tr>
<td bgcolor=#66FF66>Kode Pasien</td>
<td bgcolor=#66FF66>Nama Pasien</td>
<td bgcolor=#66FF66>Jenis Kelamin</td>
<td bgcolor=#66FF66>Jumlah Keluarga</td>
<td bgcolor=#66FF66>alamat</td>
<td bgcolor=#66FF66>Tempat Lahir</td>
<td bgcolor=#66FF66>Tanggal Lahir</td>
<td bgcolor=#66FF66>usia</TD>
<TD bgcolor=#66FF66>NO.Telephone</TD>
<TD bgcolor=#66FF66>Nama Kepala Keluarga</TD>
<td bgcolor=#66FF66>Hubungan Keluarga</td></tr>';

$sql=mysql_query("select*from pasien");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td bgcolor=#00ffff>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td  bgcolor=#00ffff>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td  bgcolor=#00ffff>'.$jum[4].'</td>';
echo '<td>'.$jum[5].'</td>';
echo '<td  bgcolor=#00ffff>'.$jum[6].'</td>';
echo '<td>'.$jum[7].'</td>';
echo '<td  bgcolor=#00ffff>'.$jum[8].'</td>';
echo '<td>'.$jum[9].'</td>';
echo '<td  bgcolor=#00ffff>'.$jum[10].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>