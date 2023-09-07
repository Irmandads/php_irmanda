<?php 
// $mahasiswa = [
//     ["Ariella Aprilla", "036", "Teknik Informatika", "riprilla@gmail.com"],
//     ["Bobby Aditama", "885", "Teknik Mesin", "byta@gmail.com"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah sring yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "muhammad amalul islam",
    "nomor" => "036",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "chimmy.png"
    ],
    [
    "nama" => "muhammad irfan yusuf",
    "nomor" => "885",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Teknik Mesin",
    "gambar" => "dino1.jpeg"
    ]
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

<?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" width="50">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Nomor : <?= $mhs["nomor"]; ?></li> 
        <li>Jurusan : <?= $mhs["email"]; ?></li>
        <li>Email : <?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>


</body>
</html>