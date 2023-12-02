<?php
// pertemuan 2 PHP dasar
// sintaks PHP
// Standar output
// echo, print
// print_r
// var-dump

echo "Bahrul Alam";

// penulisan sintaks php
// 1. php dalam html
// html dalam php

//variabel dan tipe data
//variabel
$nama = "bahrul alam";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>halo, selamat datang <?php echo $nama;  ?></h1>
    <p> <?php echo "ini adalah paragraf"; ?> </p>
</body>

</html>

<?php
//ini adalah variable
$nama_depan = "Bahrul";
$nama_belakang = "alam";

//ini concate
echo $nama_depan . " " . $nama_belakang;

echo '<br>';
//ini interpolation
echo "$nama_depan $nama_belakang";

echo '<br>';
//ini aritmatika
$x = 1;
$y = 2;


echo $x * $y . '<br>';
echo $x - $y . '<br>';
echo $x + $y . '<br>';
echo $x / $y . '<br>';



?>