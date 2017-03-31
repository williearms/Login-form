<?php
 
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'sekolahbantul');
 
/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
 
/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
    die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
?>


<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nomor </th>
    <th> Nama Sekolah </th>
    <th> NPSN </th>
    <th> BP </th>
    <th> Status </th>
    <th> PD </th>
    <th> Guru </th>
	<th> Pegawai </th>
	<th> Ruang Kelas </th>
</tr>

<?php
$queri="Select * From sekolahbantul" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "    
        <tr>
        <td>".$data['Nomor']."</td>
        <td>".$data['Nama_Sekolah']."</td>
        <td>".$data['NPSN']."</td>
        <td>".$data['BP']."</td>
        <td>".$data['Status']."</td>
        <td>".$data['PD']."</td>
        <td>".$data['Guru']."</td>
        <td>".$data['Pegawai']."</td>
        <td>".$data['R_Kelas']."</td>

        </tr> 
        ";
        
}

?>
</table>

