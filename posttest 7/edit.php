<?php

    require "koneksi.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "SELECT * FROM ops WHERE op_id = $id");
    $temp = [];

    while($row = mysqli_fetch_assoc($get)){
        $temp[] = $row;
    }
    $temp = $temp[0];

    if(isset($_POST['ubah'])){
        $op_name = $_POST['input_name'];
        $op_callsign = $_POST['input_callsign'];
        $op_gender = $_POST['input_gender'];
        $op_experience = $_POST['input_experience'];
        $op_birthplace = $_POST['input_birthplace'];
        $op_dob = $_POST['input_dob'];
        $op_race = $_POST['input_race'];
        $op_height = $_POST['input_height'];

        $result = mysqli_query($conn, "UPDATE ops SET op_name = '$op_name',op_callsign = '$op_callsign',op_gender = '$op_gender',op_experience = '$op_experience',op_birthplace = '$op_birthplace',op_dob = '$op_dob',op_race = '$op_race',op_height = '$op_height' WHERE op_id = $id ");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/form.css">
</head>
<body>
<section class="banner" >
        <div class="contentBox" >
            <div class="formBox" >
                 <h2 >Login</h2>
                 <form action="" method="post">
                    <div class="inputBox">
                        <span >Name</span>
                        <input type="text" name="input_name" style="color: var(--text);" value="<?php echo $temp['op_name']?>">
                        <label for="input_name"></label>
                    </div>
                    <div class="inputBox">
                        <span>Callsign</span>
                        <input type="text" name="input_callsign" style="color: var(--text);" value="<?php echo $temp['op_callsign']?>">
                        <label for="input_callsign"></label>
                    </div>
                    <div class="inputBox">
                        <span>Gender</span>
                        <input type="text" name="input_gender" style="color: var(--text);" value="<?php echo $temp['op_gender']?>">
                        <label for="input_gender"></label>
                    </div>
                    <div class="inputBox">
                        <span>Experience</span>
                        <input type="number" name="input_experience" style="color: var(--text);" value="<?php echo $temp['op_experience']?>">
                        <label for="input_experience"></label>
                    </div>
                    <div class="inputBox">
                        <span>Birthplace</span>
                        <input type="text" name="input_birthplace" style="color: var(--text);" value="<?php echo $temp['op_birthplace']?>">
                        <label for="input_birthplace"></label>
                    </div>
                    <div class="inputBox">
                        <span>Date of Birth</span>
                        <input type="date" name="input_dob" style="color: var(--text);" value="<?php echo $temp['op_dob']?>">
                        <label for="input_dob"></label>
                    </div>
                    <div class="inputBox">
                        <span>Race</span>
                        <input type="text" name="input_race" style="color: var(--text);" value="<?php echo $temp['op_race']?>">
                        <label for="input_race"></label>
                    </div>
                    <div class="inputBox">
                        <span>Height</span>
                        <input type="number" name="input_height" style="color: var(--text);" value="<?php echo $temp['op_height']?>">
                        <label for="input_height"></label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="submit" name="ubah" style="color: var(--text);">
                    </div>

                    <!-- <div class="inputBox">
                        <span>Gender</span>
                        <select style="color: var(--text);" class="form-select" name="jenjang" required>
                        <option selected disabled value="">Pilih</option>
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                        <label for="input_gender"></label>
                    </div> -->
                 </form>
            </div>
        </div>
    </section>
</body>
</html>