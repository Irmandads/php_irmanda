<?php
// array
// variabel yg dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah indeks, yg dimulai dari 0

// cara membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl[0];
// ebco "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jum'at";
echo "<br>";;
var_dump($hari);
