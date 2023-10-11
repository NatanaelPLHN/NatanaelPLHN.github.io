<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["input_username"];
    $nim = $_POST["input_nim"];
    $pass = $_POST["input_pass"];

    // Menampilkan hasil input
    echo "<p>Nama: $name</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Pass: $pass</p>";

    
} else {
    echo "Kesalahan pengiriman form. Pastikan Anda telah mengisi form dengan benar ^_^";
}
?>
