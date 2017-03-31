<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
 
	header('location:./../login.php');
	exit();
}
?>
<h2>Hallo <?=$_SESSION['nama'];?> Apakabar ?</h2>
 

<a href="./../tambah.php">Tambah database<a/>
</br>
<a href="./../logout.php">Logout</a>

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

