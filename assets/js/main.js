window.onload = function() {
    var bgmusic = new Audio('assets/music/powerglove-blooddragon.ogg');
    bgmusic.play();
}

function scroll() {
    document.getElementById('scrollthis').scrollIntoView(true);
}

window.onclick = function() {
    var lasersound = new Audio('assets/music/laser-sound.ogg');
    lasersound.play();
}