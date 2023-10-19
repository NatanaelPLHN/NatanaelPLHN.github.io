<!-- <?php
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
?> -->

<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "posttest";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Cannot connect to database: " . mysqli_connect_error());
    }
?>