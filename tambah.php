<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Database</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>NOMOR</td><td><input type="text" onkeyup="isi_otomatis()" name="Nomor"></td></tr>
                <tr><td>NAMA SEKOLAH</td><td><input type="text" name="nama"></td></tr>
                <tr><td>NPSN</td><td><input type="text" name="npsn"></td></tr>
                <tr><td>BP</td><td>
                        <select name="BP">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/MA/SMK</option>
                            <option value="SLB">SLB</option>
                        </select>
                    </td></tr>
                <tr><td>Status</td><td>
                        <select name="Status">
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                <tr><td>PD</td><td><input type="text" name="pd"></td></tr>
                <tr><td>Guru</td><td><input type="text" name="guru"></td></tr>
                <tr><td>Pegawai</td><td><input type="text" name="pegawai"></td></tr>
                <tr><td>R.Kelas</td><td><input type="text" name="r_kelas"></td></tr>
               
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>