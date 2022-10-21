<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>nis</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
            </td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        <tr>
        <td>tanggal lahir</td>
            <td>:</td>
            <td>
                <?= $tanggal_lahir; ?>
            </td>
        </tr>
        <tr>
        <td>tempat lahir</td>
            <td>:</td>
            <td>
                <?= $tempat_lahir; ?>
            </td>
        </tr>
        <tr>
        <td>jenis kelamin</td>
            <td>:</td>
            <td>
                <?= $gender; ?>
            </td>
        </tr>
        <tr>
        <td>agama</td>
            <td>:</td>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('Mahasiswa'); 
?>">Kembali</a>
            </td>

            </tr>
        </table>
    </center>
</body>

</html>
