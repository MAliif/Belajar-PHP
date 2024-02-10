<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            font-family:Sans-serif;
        }
    </style>
    <title>Belajar PHP</title>
</head>

<body>

</body>

<?php
    //* Part 3, PHP Dasar
    echo "<h1>PHP Dasar</h1>";
    echo "Halo nama saya Alif";
    echo "<br><br>";

    //* Part 4, Variable
    //? Variable adalah sebuah nama atau identifikasi untuk menyimpan suatu nilai data
    //? Varible di PHP diawali dengan $, dan jika ingin mengisi variable menggunakan "=". (Case Sensitive)
    //? Jika tipe data itu string maka harus menggunakan "" petik ganda
    //? Tandak titik (.), digunakan untuk memisahkan string dan variable
    $nama = "Alif";
    $umur = 17;

    echo "<h1>Variable</h1>";
    echo "Nama Saya " . $nama . " dan saya berumur " . $umur;
    echo "<br><br>";

    //* Part 5, Tipe Data
    //? String, cara penulisannnya menggunakan petik ganda.
    $v_string = "Tipe data ku string";
    //? Integer, berbentuk bilangan asli atau bilangan bulat.
    $v_int = 12;
    //? Float, bilangan desimal.
    $v_float = 12.78;
    //? Boolean, hanya memiliki dua buah value. Yaitu true dan false.
    $v_boolean = true;
    $v_boolean2 = false;

    echo "<h1>Tipe Data</h1>";
    echo "String : ".$v_string."<br>";
    echo "Integer : ".$v_int."<br>";
    echo "Float : ".$v_float."<br>";
    echo "Boolean : ".$v_boolean." dan ".$v_boolean2."<br>";
    echo "<br><br>";
?>

</html>