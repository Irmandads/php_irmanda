<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URl
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM daftar_mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

    // cek data apakah berhasil ubah
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
</head>

<body>
    <h2>ubah Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama = </label>
                <input type="text" name="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nomor">Nomor = </label>
                <input type="text" name="nomor" required value="<?= $mhs["nomor"]; ?>">
            </li>
            <li>
                <label for="email">Email = </label>
                <input type="text" name="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan = </label>
                <input type="text" name="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar = </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="50"> <br>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>


</body>

</html>