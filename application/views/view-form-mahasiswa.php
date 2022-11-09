<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                     <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>nis</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                <th>kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                <th>tanggal lahir</th>
                    <td>:</th>
                    <td>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                    </td>
</tr>
<tr>
    <th>tempat lahir</th>
    <td>:</th>
    <td>
        <input type="text" name="tempat_lahir" id="tempat_lahir">
    </td>
    </tr>
<tr>
    <th>alamat</th>
    <td>:</th>
    <td>
        <input type="text" name="alamat" id="alamat">
    </td>
    </tr>
<tr>
    <th>jenis kelamin</th>
    <td>:</th>
    <td>
        <input type="radio" name="gender" value="laki-laki">Laki-laki
        <input type="radio" name="gender" value="perempuan">Perempuan

                    <th>agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Protestan">Protestan</
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>