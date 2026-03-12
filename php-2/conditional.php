<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Function</title>
</head>

<body>

<h1>Berlatih Function PHP</h1>

<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($nama){
    echo "Halo " . ucfirst($nama) . ", Selamat Datang di Sanbercode! <br>";
}

// menjalankan function
greetings("Bagas");
greetings("Wahyu");
greetings("Bimo");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($kata){

    $hasil = "";
    $panjang = strlen($kata);

    for($i = $panjang - 1; $i >= 0; $i--){
        $hasil .= $kata[$i];
    }

    echo $hasil . "<br>";
}

// menjalankan function
reverseString("Bimo");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($kata){

    $balik = "";
    $panjang = strlen($kata);

    for($i = $panjang - 1; $i >= 0; $i--){
        $balik .= $kata[$i];
    }

    if($kata == $balik){
        echo "true <br>";
    }else{
        echo "false <br>";
    }

}

// menjalankan function
palindrome("civic");
palindrome("nababan");
palindrome("jambaban");
palindrome("racecar");

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai){

    if($nilai >= 85 && $nilai <= 100){
        return "Sangat Baik";
    }
    elseif($nilai >= 70 && $nilai < 85){
        return "Baik";
    }
    elseif($nilai >= 60 && $nilai < 70){
        return "Cukup";
    }
    else{
        return "Kurang";
    }

}

// menjalankan function
echo tentukan_nilai(98) . "<br>";
echo tentukan_nilai(76) . "<br>";
echo tentukan_nilai(67) . "<br>";
echo tentukan_nilai(43) . "<br>";

?>

</body>
</html>