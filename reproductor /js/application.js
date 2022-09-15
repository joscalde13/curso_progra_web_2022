function presionar(){
    if(!video.paused && !video.ended){
        video.pause();
     
        document.querySelector(".fa-play").style.display = "block";
        document.querySelector(".fa-pause").style.display = "none";
        window.clearInterval(bucle);
 
    }else{
        video.play();
        document.querySelector(".fa-play").style.display = "none";
        document.querySelector(".fa-pause").style.display = "block";
    
        bucle = setInterval(estado, 1000);
    }
 }
 
 function estado() {
    if(!video.ended){
        var total = parseInt(video.currentTime * maximo / video.duration);
        progreso.style.width = total + 'px';
    }else{
        progreso.style.width = '0px';
        reproducir.innerHTML = "Reproducir";
        window.clearInterval(bucle);
    }
 }
 
 
 function iniciar(){
    maximo = 600;
    video = document.getElementById('medio');
    reproducir = document.getElementById('reproducir');
    barra = document.getElementById('barra');
    progreso = document.getElementById('progreso');
    reproducir.addEventListener('click', presionar, false);
    barra.addEventListener('click', mover, false);
    retroceder = document.getElementById('retroceder');
     avanzar = document.getElementById('adelantar');
     retroceder.addEventListener('click', rewind, false);
     avanzar.addEventListener('click', forward, false);
     expandirPantalla = document.getElementById("fullscreen");
     expandirPantalla.addEventListener('click', expandir, false);
 }
 
 function expandir(e){
    e.preventDefault();
    video.requestFullscreen();
 }
 function rewind(){
    video.currentTime = video.currentTime - ((video.duration/100)*5);
 }
 
 function forward(){
    video.currentTime = video.currentTime + ((video.duration/100)*5);
 }
 
 function mover(e){
    if(!video.pause && !video.ended){
        var ratonX = e.pageX - barra.offsetLeft;
        var nuevoTiempo = ratonX * video.duration / maximo;
        video.currentTime = nuevoTiempo;
        progreso.style.width = ratonX + 'px';
    }
 }
 
 window.addEventListener('load', iniciar, false);