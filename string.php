<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulasi string</title>
</head>
<body>
    <h1>manipulasi string php</h1>
    <form action="" method="post">
        <label >masukkan kata :</label>
        <br>
        <input type="text" name="cek_kata">
        <input type="submit" value="cek" name="cek">
        <br>
    </form>
    <?php
    if(isset($_POST['cek'])){
        $cek_string = $_POST["cek_kata"];
        echo "$cek_string <br>";
        echo "jumlah karakter :".strlen($cek_string);
        echo "<br>";
        echo "jumlah kata :".str_word_count($cek_string)."<br>";
        echo "kebalikan :".strrev($cek_string)."<br>";
    }
    ?>
    <h1>operator aritmatika</h1>
    <?php
    $angka1 =10;
    $angka2 =14;

    $tambah = $angka1 + $angka2;
    echo $tambah;
    echo "<br>";
    ?>
    <h1>menghitung hitung</h1>
<form action="" method="post">
    <label for="nilai_a">nilai A : </label>
<input type="number" id="nilai_a" name="nilai_a"><br><br>
<label for="nilai_b">nilai B : </label>
<input type="number" id="nilai_b" name="nilai_b"><br><br>
<button type="submit">hitung</button>
<br>

<?php
if(isset($_POST['nilai_a']) && isset($_POST['nilai_b'])){
    $nilaiA = $_POST['nilai_a'];
    $nilaiB = $_POST['nilai_b'];
    echo "hasil penjumlahan".($nilaiA + $nilaiB)."<br>";
    echo "hasil perkalian".($nilaiA * $nilaiB)."<br>";
    echo "hasil pengurangan".($nilaiA - $nilaiB)."<br>";
    echo "hasil pembagian".($nilaiA / $nilaiB)."<br>";
}
?>
</form>
</body>
</html>

