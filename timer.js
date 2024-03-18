"use strict";

let hour = 0;
let minute = 0;
let second = 0;
let millisecond = 0;

let cron;


start();


function start() {
    
    cron = setInterval(() => { timer(); }, 10);
}

function pause() {
    clearInterval(cron);
}





function timer() {
    if ((millisecond += 10) == 1000) {
        millisecond = 0;
        second++;
    }
    if (second == 60) {
        second = 0;
        minute++;
    }
    if (minute == 60) {
        minute = 0;
        hour++;
    }
    
    document.getElementById('minute').innerText = returnData(minute);
    document.getElementById('second').innerText = returnData(second);
    
}

function returnData(input) {
    return input > 10 ? input : `0${input}`
}