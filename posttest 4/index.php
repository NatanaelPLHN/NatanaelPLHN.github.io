<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arknights Database</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

    <script src="scripts.js"></script>

    <nav class="navbar" id="navbar">
        <a href="#"><img class="gambar" src="assets/images/logo_RI.png" alt="arknights_logo.png" id="invert-icons" style="width: 50; height: 74px;">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bio.php">About Me</a></li>
        </ul>

        <label class="switch">
            <input type="checkbox" onclick="light_mode()" id="theme_light">
            <span class="slider round"></span>
          </label>
    </nav>

    <section class="main_banner">
        <div class="content">
            <div class="textBox">
                <a href="#" alt="logo.jpg"><img src="assets/images/logo_arknights-White.png" id="image-logo_arknights" alt=""></a>
            </div>
        </div>
    </section>

    <section class="banner " id="animate">

        <script>
            function lines(){
                let sizeW = Math.random() * 12;
                let e = document.createElement("div");
                e.setAttribute("class", "circle");
                document.getElementById("animate").appendChild(e);

                e.style.width = 2+sizeW+'px'
                e.style.left = Math.random() * + innerWidth + 'px';

                setTimeout(() => {
                    document.getElementById("animate").removeChild(e)
                }, 5000);
            }
        
            setInterval(() => {
                lines()
            }, 100);
        </script>


        <div class="content">
            <div class="textBox">
                <h1 class="c-white">W.I.P</h1>
            </div>
        </div>
    </section>

    <hr class="c-white">
    
    <section class="banner" >
        <div class="contentBox" >
            <div class="formBox" >
                 <h2 >Login</h2>
                 <form action="process.php" method="post">
                    <div class="inputBox">
                        <span >Username</span>
                        <input type="text" name="input_username" style="color: var(--text);">
                        <label for="input_username"></label>
                    </div>
                    <div class="inputBox">
                        <span>NIM</span>
                        <input type="number" name="input_nim" style="color: var(--text);">
                        <label for="input_nim"></label>
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="input_pass" style="color: var(--text);">
                        <label for="input_pass"></label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="submit" name="" style="color: var(--text);">
                    </div>
                 </form>
            </div>
        </div>

        <div class="contentBox">
            <div class="output">
                <?php
                    echo "<hr/>";
                    include("process.php")
                ?>
            </div>
        </div>
    </section>

    <hr class="c-white">

    <footer>
        <ul class="icons">
            <li><a href="https://twitter.com/ArknightsEN">                          <img src="assets/images/logo-twitter.svg"   class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://discord.com/invite/arknights">                     <img src="assets/images/logo-discord.svg"   class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://www.instagram.com/arknights_messenger_official">   <img src="assets/images/logo-instagram.svg" class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://www.youtube.com/@ArknightsOfficialYostar">         <img src="assets/images/logo-youtube.svg"   class="filter-white sm_icon" id="social-icons" alt=""></a></li>
        </ul>
    </footer>

</body>
</html>