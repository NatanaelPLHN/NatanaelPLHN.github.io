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
            <li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
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

        <!-- <script>
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
        </script> -->


        <div class="content">

            <div class="container">
                <span style="color: var(--text);" id="days">00</span>
                <br>
                <span style="color: var(--text);" id="date">00</span>
                <br>
                <span style="color: var(--text);" id="months">00</span>
                <br>
                <span style="color: var(--text);" id="years">00</span>
                <br>
            </div>

            <div class="container">
                <span style="color: var(--text);" id="hours">00</span>
                <span style="color: var(--text);">:</span>
                <span style="color: var(--text);" id="minutes">00</span>
                <span style="color: var(--text);">:</span>
                <span style="color: var(--text);" id="seconds">00</span>
                <!-- <span style="color: var(--text);" id="sessions">AM</span>     -->
            </div>

            <script>
                function displayTime() {
                    var dateTime = new Date();

                    var day = dateTime.getDay();
                    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    var dayName = dayNames[day];

                    var date = dateTime.getDate();

                    var month = dateTime.getMonth();
                    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var monthName = monthNames[month];

                    var year = dateTime.getFullYear();

                    var hrs = dateTime.getHours();
                    var min = dateTime.getMinutes();
                    var sec = dateTime.getSeconds();
                    var sessions = document.getElementById('sessions');


                    document.getElementById('days').innerHTML = dayName;
                    document.getElementById('date').innerHTML = date;
                    document.getElementById('months').innerHTML = monthName;
                    document.getElementById('years').innerHTML = year;
                    document.getElementById('hours').innerHTML = hrs;
                    document.getElementById('minutes').innerHTML = min;
                    document.getElementById('seconds').innerHTML = sec;
                }
                setInterval(displayTime, 10);
            </script>

        </div>
    </section>

    <hr class="c-white">

    <footer>
        <ul class="icons">
            <li><a href="https://twitter.com/ArknightsEN"> <img src="assets/images/logo-twitter.svg" class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://discord.com/invite/arknights"> <img src="assets/images/logo-discord.svg" class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://www.instagram.com/arknights_messenger_official"> <img src="assets/images/logo-instagram.svg" class="filter-white sm_icon" id="social-icons" alt=""></a></li>
            <li><a href="https://www.youtube.com/@ArknightsOfficialYostar"> <img src="assets/images/logo-youtube.svg" class="filter-white sm_icon" id="social-icons" alt=""></a></li>
        </ul>
    </footer>

</body>

</html>