<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfiguraasi

// round (pembulatan data ke atas, seperti 2,5 = 3 )
// floor (pembulatan data ke bawah, seperti 3,5 = 3 )
// ceil (pembulatan data ke atas semua, seperti 2,3 = 3)

$jumlahdataperhalaman = 2;
$jumlahdata = count(query("SELECT * FROM daftar_mahasiswa"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
$halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;


$mahasiswa = query("SELECT * FROM daftar_mahasiswa LIMIT $awaldata, $jumlahdataperhalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Logout</a>

    <h2>Daftar Mahasiswa</h2>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..">
        <button type="submit" name="cari">Cari!</button>

    </form>
    <br><br>

    <!-- navigasi -->

    <?php if ($halamanaktif > 1) : ?>
        <a href="?halaman=<?= $halamanaktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
        <?php if ($i == $halamanaktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanaktif < $jumlahhalaman) : ?>
        <a href="?halaman=<?= $halamanaktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin untuk dihapus?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                <td><?= $row["nomor"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>