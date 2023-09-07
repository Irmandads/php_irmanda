<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nomor"]) ||
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"]) || 
    !isset($_GET["gambar"])) {
    // redirect
    header("location: get_post.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" width="50"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nomor"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="get_post.php">Home</a>

</body>
</html>