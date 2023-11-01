<?php
require "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES ('', '$username', '$password')";
    $result = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script> alert( 'Registrasi Berhasil!!');
    document.location.href='index.php';
    </script>";
    }else{
        echo "<script> alert( 'Registrasi gagal!!');
        document.location.href='register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="register" class="login-btn">Register</button>
    </form>
</body>

</html>