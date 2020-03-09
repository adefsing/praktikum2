<!-- ini halaman tampilan yang menampilkan haaman view user yang berfungsi untuk menampilkan data dari database "user" -->

<!DOCTYPE html>
<html>

<head>
    <title>Menghubungkan codeigniter dengan database mysql</title>
</head>

<body>
    <h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>


    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>

        <!-- ini adalah perulangan atau looping data array $user menjadi $u di ulang sebanyak data tabel user di database -->
        <?php foreach ($user as $u) { ?>
            <tr>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>