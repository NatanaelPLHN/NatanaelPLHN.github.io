var welcome = prompt("Insert your name : ")
alert("Welcome home Doctor " + welcome)

function light_mode(){

    var theme_light = document.body;
    theme_light.classList.toggle("theme-light")
}

function lines(){
    let e = document.createElement("div");
    e.setAttribute("class", "circle");
    document.body.appendChild(e)
}


function changeImage(){
    
    var img = document.getElementById("image-logo_arknights");
    img.src = 'assets/images/logo_arknights-Black.svg'
}

var social_icon_hover = document.getElementById("social-icons");

social_icon_hover.addEventListener("mouseover", function(){
    social_icon_hover.style.transform = "translateY(-10px)";
    console.log("working?")
});

social_icon_hover.addEventListener("mouseout", function(){
    social_icon_hover.style.transform = "none";
});

function displayTime(){

    var dateTime = new Date();
    var hrs = dateTime.getHours();
    var min = dateTime.getMinutes();
    var sec = dateTime.getSeconds();
    var sessions = document.getElementById('sessions');

    document.getElementById('hours').innerHTML = hrs;
    document.getElementById('minutes').innerHTML = min;
    document.getElementById('seconds').innerHTML = sec;
}
setInterval(displayTime, 10);