<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="/css/main.css?t=<?=date("U")?>" type="text/css" rel="stylesheet" media="screen"/>
<title>Football</title>
</head>
<body>
<div class="container">
    <div class="pitch">
        <div class="c center"></div>
        <div class="c left"></div>
        <div class="c right"></div>
        <div class="p left"></div>
        <div class="p right"></div>
        <div class="p-bg left"></div>
        <div class="p-bg right"></div>
        <div class="g left"></div>
        <div class="g right"></div>
        <div class="m center"></div>
        <div class="m left"></div>
        <div class="m right"></div>
        <div class="hw"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <div class="a"></div>
        <b></b>
        <p id="player" style="top:0;left:0;w"></p>
    </div>
</div>
<script>
var player = {};
player.el = document.getElementById("player");
player.x = 0;
player.y = 0
player.step = 1;

var keys = {};

this.interval = setInterval(updateGame, 10);

function updateGame() {
    if (keys[16]) {
        player.step = 1.5;
    }
    else {
        player.step = 1;
    }
    if (keys[87]) {
        player.y = player.y - player.step;
    }
    if (keys[65]) {
        player.x = player.x - player.step;
    }
    if (keys[83]) {
        player.y = player.y + player.step;
    }
    if (keys[68]) {
        player.x = player.x + player.step;
    }
    console.log(player.x + " " + player.y);
    movePlayer();
}


document.onkeydown = function(e) {
    keys[e.which] = true;
};

document.onkeyup = function(e) {
    delete keys[e.which];
};

function movePlayer() {
    player.el.style.top = player.y + "px";
    player.el.style.left = player.x + "px";
}

var areas = Array.from (document.querySelectorAll('.a'))
areas.forEach((element, index) => {
    console.log(element);
    setTimeout(function() {
        areas[index].classList.add("pulse");
    }, 100 * index);
});




</script>

</body>
</html>
