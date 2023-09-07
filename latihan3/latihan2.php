<?php
$mahasiswa = [
    ["Ariella Aprilla", "036", "Teknik Informatika", "riprilla@gmail.com"],
    ["Bobby Aditama", "885", "Teknik Mesin", "byta@gmail.com"],
    ["Regina Valeria", "936", "Matematika", "ginalee@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>Nomor :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>