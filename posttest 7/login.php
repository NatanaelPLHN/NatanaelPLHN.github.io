<?php
session_start();
require "koneksi.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row  = mysqli_fetch_assoc($result);

            $_SESSION['login'] = true;
            header("location:dashboard1.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="login" class="login-btn">Login</button>


    </form>
</body>

</html>