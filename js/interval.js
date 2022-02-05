const startingMinutes = 1;
let time = startingMinutes * 60;
let times =document.getElementsByClassName('times');

const countdownEl = document.getElementById('count');

setInterval(updateCountdown, 1000);

function updateCountdown(){
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;
     let pratik=countdownEl.innerHTML = `${minutes}: ${seconds}`;
    time--;
    
}