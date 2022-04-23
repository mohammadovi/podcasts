
const musicContainer = document.getElementById('music-container');
const playBtn = document.getElementById('play');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');

const audio = document.getElementById('audio');
const progress = document.getElementById('progress');
const progressContainer = document.getElementById('progress-container');
const title = document.getElementById('title');
const cover = document.getElementById('cover');
// const currTime = document.getElementById('currTime');
// const durTime = document.getElementById('durTime');

var x = audio.duration;
function convertHMS(value) {
    const sec = parseInt(value, 10); // convert value to number if it's string
    let hours   = Math.floor(sec / 3600); // get hours
    let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
    let seconds = sec - (hours * 3600) - (minutes * 60); //  get seconds
    // add 0 if value < 10; Example: 2 => 02
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    return hours+':'+minutes+':'+seconds; // Return is HH : MM : SS
}

// Countdown
audio.addEventListener("timeupdate", function() {
    var timeleft = document.getElementById('currTime'),
        duration = parseInt( audio.duration ),
        currentTime = parseInt( audio.currentTime ),
        timeLeft = duration - currentTime,
        s, m;


    s = timeLeft % 60;
    m = Math.floor( timeLeft / 60 ) % 60;

    s = s < 10 ? "0"+s : s;
    m = m < 10 ? "0"+m : m;

    timeleft.innerHTML = m+":"+s;

}, false);

// // Countup
// audio.addEventListener("timeupdate", function() {
//     var timeline = document.getElementById('durTime');
//     var s = parseInt(audio.currentTime % 60);
//     var m = parseInt((audio.currentTime / 60) % 60);
//     if (s < 10) {
//         timeline.innerHTML = m + ':0' + s;
//     }
//     else {
//         timeline.innerHTML = m + ':' + s;
//     }
// }, false);

$("#durTime").html(convertHMS(x))

const songs =['','',''];
let songIndex = 2;
loadSong(songs[songIndex]);
function loadSong(song){
       title.innerHTML=song;

}
function playSong(){
    musicContainer.classList.add('play');
    playBtn.querySelector('i.fas').classList.remove('fa-play');
    playBtn.querySelector('i.fas').classList.add('fa-pause');
    audio.play();
}
function pauseSong(){
    musicContainer.classList.remove('play');
    playBtn.querySelector('i.fas').classList.add('fa-play');
    playBtn.querySelector('i.fas').classList.remove('fa-pause');
    audio.pause();
}

function prevSong(){
    songIndex--;
    if(songIndex<0){
        songIndex=songs.length -1;
    }
    loadSong(songs[songIndex]);
    playSong();

}
function nextSong(){
    songIndex++;
    if(songIndex > songs.length -1){
        songIndex=0;
    }
    loadSong(songs[songIndex]);
    playSong();

}
function updateProgress(e){
    const {duration,currentTime}=e.srcElement;
    const progressPercent=(currentTime/duration)*100;
    progress.style.width=`${progressPercent}%`;
}
function setProgress(e){
    const width=this.clientWidth;
    const clickX = e.offsetX;
    const duration = audio.duration;
    audio.currentTime=(clickX / width) * duration;
}

playBtn.addEventListener('click',()=>{
    const isPlaying =musicContainer.classList.contains('play');

    if(isPlaying){
        pauseSong();
    }else{
        playSong();
    }

});
prevBtn.addEventListener('click',prevSong);
nextBtn.addEventListener('click',nextSong);

audio.addEventListener('timeupdate',updateProgress);

progressContainer.addEventListener('click',setProgress);

audio.addEventListener('ended',nextSong);

// audio.addEventListener('timeupdate',durTime);








// $(document).ready(function () {
//     let player = document.getElementById("player");
//     let plyBtn= document.getElementById('playpause-track');
//     let currentMusicTime = document.getElementsByClassName('total-duration')
//
//     $('.playpause-track').on('click',function (){
//         if(player.paused){
//             player.play();
//             plyBtn.innerHTML = '<i class="bi bi-pause-circle bi-5x"> </i>';
//         } else {
//             player.pause();
//             plyBtn.innerHTML = '<i class="bi bi-play-circle bi-5x"> </i>';
//         }
//     });
// });
//
// player();
// function player(){
//     $("#player")[0].src = $("#playlist li a")[0];
//     $("#player")[0].play();
// }
//
