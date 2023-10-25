<?php
    require "koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM ops");
    $temp = [];
    while($row = mysqli_fetch_assoc($result)){
        $temp[]=$row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Staff</title>
    <link rel="stylesheet" href="assets/dashboard1.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

        <script src="scripts.js"></script>

        <main class="dash-container">
        <nav class="navbar" id="navbar" style="position: sticky;">
            <a href="#"><img class="gambar" src="assets/images/logo_RI.png" alt="arknights_logo.png" id="invert-icons" style="width: 50; height: 74px;">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bio.php">About Me</a></li>
                <li><a href="dashboard1.php">Dashboard</a></li>
                <li><a href="form.php">Tambah Data</a></li>
            </ul>

            <label class="switch">
                <input type="checkbox" onclick="light_mode()" id="theme_light">
                <span class="slider round"></span>
              </label>
        </nav>
            <section class="dash-main">
                <h1>Halo !</h1>
                <hr><br>
                <br>
                <table>
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>Name</th>
                            <th>Callsign</th>
                            <th>Gender</th>
                            <th>Experience</th>
                            <th>Birthplace</th>
                            <th>Date of Birth</th>
                            <th>Race</th>
                            <th>Heigth</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($temp as $tmp) :?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $tmp['op_name']; ?></td>
                            <td><?php echo $tmp['op_callsign']; ?></td>
                            <td><?php echo $tmp['op_gender']; ?></td>
                            <td><?php echo $tmp['op_experience']; ?></td>
                            <td><?php echo $tmp['op_birthplace']; ?></td>
                            <td><?php echo $tmp['op_dob']; ?></td>
                            <td><?php echo $tmp['op_race']; ?></td>
                            <td><?php echo $tmp['op_height']; ?></td>

                            <td class="action"> 
                                <a href="edit.php?id=<?php echo $tmp['op_id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="delete.php?id=<?php echo $tmp['op_id']?>"><button class="delete-btn" onclick="confirm('Yakin ingin menghapus <?php echo $mhs['nama']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
</body>
</html>