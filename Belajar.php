<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            font-family: Sans-serif;
        }
    </style>
    <title>Belajar PHP</title>
</head>

<body>
    <p>Sumber belajar : <u><a style="color:brown" target="_blank" href="https://www.malasngoding.com/category/php/">https://www.malasngoding.com/category/php/</a></u></p>
</body>

<?php
//* Part 3 PHP Dasar
echo "<h1>PHP Dasar</h1>";
echo "Halo nama saya Alif";
echo "<br><br>";

//* Part 4 Variable
//? Variable adalah sebuah nama atau identifikasi untuk menyimpan suatu nilai data
//? Varible di PHP diawali dengan $, dan jika ingin mengisi variable menggunakan "=". (Case Sensitive)
//? Jika tipe data itu string maka harus menggunakan "" petik ganda
//? Tandak titik (.), digunakan untuk memisahkan string dan variable
$nama = "Alif";
$umur = 17;

echo "<h1>Variable</h1>";
echo "Nama Saya " . $nama . " dan saya berumur " . $umur;
echo "<br><br>";

//* Part 5 Tipe Data
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
echo "String : " . $v_string . "<br>";
echo "Integer : " . $v_int . "<br>";
echo "Float : " . $v_float . "<br>";
echo "Boolean : " . $v_boolean . " dan " . $v_boolean2 . "<br>";
echo "<br><br>";

//* Part 6 Manipulasi String
$v_isi = "Kucingku namanya Ahmad";
$v_isi2 = "Selamat Pagi, semangat!";
$v_isi3 = "Konsisten, dan pegang janjimu";
$v_isi4 = "Indonesia adalah negara dengan <u>sedikit</u> rakyat";

echo "<h1>Manipulasi String</h1>";
//? Menghitung jumlah karakter dengan strlen()
echo "<i>" . $v_isi . "</i><br />";
echo "Fungsi untuk menghitung jumlah karakter : " . strlen($v_isi) . "<br />";
//? Menghitung jumlah kata dengan str_word_count()
echo "<br /><i>" . $v_isi2 . "</i><br />";
echo "Fungsi untuk menghitung jumlah kata : " . str_word_count($v_isi2) . "<br />";
//? Membalikan urutan karakter pada string dengan strrev()
echo "<br /><i>" . $v_isi3 . "</i><br />";
echo "Fungsi untuk membalikan urutan karakter : " . strrev($v_isi3) . "<br />";
//? Memflilter dan mengganti string dengan str_replace()
//? Parameter pertama : kata yang ingin diganti
//? Parameter kedua : kaya yang digunakan sebagai pengganti
//? Parameter ketiga : isi string
echo "<br /><i>" . $v_isi4 . "</i><br />";
echo "Fungsi untuk memflilter dan mengganti string : " . str_replace("sedikit", "banyak", $v_isi4) . "<br />";
echo "<br><br>";

//* Part 7 Kondisi
//? Digunakan ketika butuh untuk pengecekan Kondisi
$teman = "Alif";

echo "<h1>Kondisi</h1>";
echo "Isi variablenya : ".$teman."<br>";
echo "Kalo tipe data variablenya string maka akan keluar <u>'Cihuy'</u>, jika tidak maka akan keluar <u>'Kondisinya salah'</u>";
if (is_string($teman)) {
    echo "<br /> Cihuy";
} else {
    echo "Kondisinya salah";
}

//* Part 8 Fungsi/Function
// http://support.kodable.com/en/articles/417313-what-are-functions#:~:text=Definition%3A%20A%20function%20is%20a,together%20later%20in%20a%20program.
//? Fungsi adalah rangkaian perintah yang nantinya dapat digunakan kembali bersama-sama dalam suatu program.
// https://ocw.upj.ac.id/files/Handout-IFA105-MP5-Fungsi.pdf
//? () adalah parameter. Parameter adalah variable yang berfungsi untuk menampung nilai yang akan dikirim ke function
//? {} perintah dari function
function pertambahan($angka1, $angka2) {
    echo $angka1 + $angka2;
}
//? Memanggil function dengan menyebut nama functionnya saja
pertambahan(1, 9);
?>
</html>