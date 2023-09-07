<?php  
$mahasiswa = [
    [
    "nama" => "Ananda fitriani agustin",
    "nomor" => "085",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "chimmy.png"
    ],
    [
    "nama" => "indah puspita sari",
    "nomor" => "081",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Teknik Mesin",
    "gambar" => "dino1.jpeg"
    ],
    [
    "nama" => "lovia arsafania",
    "nomor" => "098",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Matematika",
    "gambar" => "dino2.jpeg"
    ],
    [
    "nama" => "muhammad irfan yusuf",
    "nomor" => "075",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Hukum",
    "gambar" => "dino3.jpeg"
    ],
    [
    "nama" => "muhammad amalul islam",
    "nomor" => "076",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Pendidikan Kedokteran",
    "gambar" => "dino4.jpeg"
    ],
    [
    "nama" => "muhammad yovano",
    "nomor" => "098",
    "email" => "fani98542@gmail.com",
    "jurusan" => "Arsitektur",
    "gambar" => "shooky.png"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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