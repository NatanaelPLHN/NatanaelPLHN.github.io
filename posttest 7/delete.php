<?php
    require "koneksi.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "DELETE FROM ops WHERE op_id = $id");
    $temp=[];

    
    if ($get) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'dashboard1.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'dashboard1.php';
        </script>";
    }
?>