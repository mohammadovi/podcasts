//
// // Select all the elements in the HTML page
// // and assign them to a variable
//
// // Specify globally used values
// let track_index = 0;
// let isPlaying = false;
// let updateTimer;
//
// // Create the audio element for the player
// let curr_track = document.createElement('audio');
//
// // Define the list of tracks that have to be played
// let track_list = [];
// specialPodcasts.forEach(function(podcast){
//     track_list.push({
//         name: podcast['title'],
//         artist: podcast['id'],
//         image: "main/assets/img/posterepisod/4.jpg",
//         path: "main/assets/audio/Kalimba.mp3"
//     });
// })
//
// function loadTrack(track_index) {
//   // Clear the previous seek timer
//   clearInterval(updateTimer);
//   resetValues();
//
//   // Load a new track
//   curr_track.src = track_list[track_index].path;
//   curr_track.load();
//
//   // Update details of the track
//   track_art.style.backgroundImage =
//     "url(" + track_list[track_index].image + ")";
//   track_name.textContent = track_list[track_index].name;
//   track_artist.textContent = track_list[track_index].artist;
//   now_playing.textContent =
//     "پادکست شماره" + (track_index + 1) + " از " + track_list.length;
//
//   // Set an interval of 1000 milliseconds
//   // for updating the seek slider
//   updateTimer = setInterval(seekUpdate, 1000);
//
//   // Move to the next track if the current finishes playing
//   // using the 'ended' event
//   curr_track.addEventListener("ended", nextTrack);
// }
//   // Apply a random background color
// //   random_bg_color();
// //
//
// //   function random_bg_color() {
// //   // Get a random number between 64 to 256
// //   // (for getting lighter colors)
// //   let red = Math.floor(Math.random() * 256) + 64;
// //   let green = Math.floor(Math.random() * 256) + 64;
// //   let blue = Math.floor(Math.random() * 256) + 64;
//
// //   // Construct a color withe the given values
// //   let bgColor = 'rgb(" + red + ", " + green + ", " + blue + ")';
//
// //   // Set the background to the new color
// //   document.div..style.background = bgColor;
// //   }
//
//   // Function to reset all values to their default
//   function resetValues() {
//   curr_time.textContent = "00:00";
//   total_duration.textContent = "00:00";
//   seek_slider.value = 0;
//   }
//
//   function playpauseTrack() {
//     // Switch between playing and pausing
//     // depending on the current state
//     if (!isPlaying) playTrack();
//     else pauseTrack();
//     }
//
//
//
//     function nextTrack() {
//     // Go back to the first track if the
//     // current one is the last in the track list
//     if (track_index < track_list.length - 1)
//       track_index += 1;
//     else track_index = 0;
//
//     // Load and play the new track
//     loadTrack(track_index);
//     playTrack();
//     }
//
//     function prevTrack() {
//     // Go back to the last track if the
//     // current one is the first in the track list
//     if (track_index > 0)
//       track_index -= 1;
//     else track_index = track_list.length - 1;
//
//     // Load and play the new track
//     loadTrack(track_index);
//     playTrack();
//     }
//
//     function seekTo() {
//       // Calculate the seek position by the
//       // percentage of the seek slider
//       // and get the relative duration to the track
//       seekto = curr_track.duration * (seek_slider.value / 100);
//
//       // Set the current track position to the calculated seek position
//       curr_track.currentTime = seekto;
//       }
//
//       function setVolume() {
//       // Set the volume according to the
//       // percentage of the volume slider set
//       curr_track.volume = volume_slider.value / 100;
//       }
//
//       function seekUpdate() {
//       let seekPosition = 0;
//
//       // Check if the current track duration is a legible number
//       if (!isNaN(curr_track.duration)) {
//         seekPosition = curr_track.currentTime * (100 / curr_track.duration);
//         seek_slider.value = seekPosition;
//
//         // Calculate the time left and the total duration
//         let currentMinutes = Math.floor(curr_track.currentTime / 60);
//         let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
//         let durationMinutes = Math.floor(curr_track.duration / 60);
//         let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);
//
//         // Add a zero to the single digit time values
//         if (currentSeconds < 10) { currentSeconds = "0" + currentSeconds; }
//         if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
//         if (currentMinutes < 10) { currentMinutes = "0" + currentMinutes; }
//         if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }
//
//         // Display the updated duration
//         curr_time.textContent = currentMinutes + ":" + currentSeconds;
//         total_duration.textContent = durationMinutes + ":" + durationSeconds;
//       }
//       }
// // Load the first track in the tracklist
// loadTrack(track_index);
//
//
// // // Select all the elements in the HTML page
// // // and assign them to a variable
// //
//
// const music = document.querySelector('#audio-source');
// const coverImage = document.querySelector(".track-art");
// const songName = document.querySelector(".track-name");
// const artistName = document.querySelector(".track-artist");
// const playBtn = document.querySelector(".playpause-track");
//
// music.src = track_list[track_index].path;
// music.load();
//
// function playBtn() {
//     // Switch between playing and pausing
//     // depending on the current state
//     if (!isPlaying) playTrack();
//     else pauseTrack();
// }
// function playTrack() {
//     // Play the loaded track
//     music.play();
//     isPlaying = true;
//
//     // Replace icon with the pause icon
//     playBtn.innerHTML = '<i class="bi bi-pause-circle bi-5x"></i>';
// }
//
// function pauseTrack() {
//     // Pause the loaded track
//     music.pause();
//     isPlaying = false;
//
//     // Replace icon with the play icon
//     playBtn.innerHTML = '<i class="bi bi-play-circle bi-5x"></i>';
// }
//
//
// //
// // let currentMusic = 0;
// // let now_playing = document.querySelector(".now-playing");
// //
//
// //
// // const playBtn = document.querySelector(".play-track");
// // const pauseBtn = document.querySelector(".pause-track");
// // const forwardBtn = document.querySelector(".next-track");
// // const backwardBtn = document.querySelector(".prev-track");
// // const repeatBtn = document.querySelector('span.bi-123');
// // const volumeBtn = document.querySelector('span.bi-volume-up');
// //
// // const seekBar = document.querySelector(".seek_slider");
// // const volumeSlider = document.querySelector(".volume_slider");
// // const currentMusicTime = document.querySelector(".current-time");
// // const musicDuration = document.querySelector(".total-duration");
// // // End Select
// // // // Specify globally used values
// // // let track_index = 0;
// // // let isPlaying = false;
// // // let updateTimer;
// //
// // const setMusic = (i) => {
// //     seekBar.value = 0;
// //     let song = songs[i];
// //     currentMusic = i;
// //     music.src = song.path;
// //     songName.innerHTML = song.name;
// //     artistName.innerHTML = song.artist;
// //     coverImage.src = song.cover;
// //     setTimeout(() => {
// //         seekBar.max = music.duration;
// //         musicDuration.innerHTML = formatTime(music.duration);
// //     }, 300);
// //     currentMusicTime.innerHTML = '00 : 00';
// //
// // }
// // setMusic(0);
// //
// // // format duration in 00 : 00 format
// //
// // const formatTime = (time) => {
// //     let min = Math.floor(time / 60);
// //     if(min < 10){
// //         min = `0` + min;
// //     }
// //
// //     let sec = Math.floor(time % 60);
// //     if(sec < 10){
// //         sec = `0` + sec;
// //     }
// //
// //     return `${min} : ${sec}`;
// // }
// //
// // playBtn.addEventListener('click', () => {
// //     music.play();
// //     playBtn.classList.remove('active');
// //     pauseBtn.classList.add('active');
// // })
// // pauseBtn.addEventListener('click', () => {
// //     music.pause();
// //     pauseBtn.classList.remove('active');
// //     playBtn.classList.add('active');
// // })
// // //  forward btn
// //
// // forwardBtn.addEventListener('click', () => {
// //     if(currentMusic >= songs.length - 1){
// //         currentMusic = 0;
// //     } else{
// //         currentMusic++;
// //     }
// //     setMusic(currentMusic);
// //     playBtn.click();
// // })
// //
// // // backward btn
// //
// // backwardBtn.addEventListener('click', () => {
// //     if(currentMusic <= 0){
// //         currentMusic = songs.length - 1;
// //     } else{
// //         currentMusic--;
// //     }
// //     setMusic(currentMusic);
// //     playBtn.click();
// // })
// // // seekbar events
// //
// // //seekbar function
// // setInterval(() => {
// //     seekBar.value = music.currentTime;
// //     currentMusicTime.innerHTML = formatTime(music.currentTime);
// //     if(Math.floor(music.currentTime) == Math.floor(seekBar.max)){
// //         if(repeatBtn.className.includes('active')){
// //             setMusic(currentMusic);
// //             playBtn.click();
// //         } else{
// //             forwardBtn.click();
// //         }
// //     }
// // }, 500)
// //
// // seekBar.addEventListener('change', () => {
// //     music.currentTime = seekBar.value;
// // })
// //
// // // repeat button
// //
// // repeatBtn.addEventListener('click', () => {
// //     repeatBtn.classList.toggle('active');
// // })
// //
// // // volume section
// //
// // volumeBtn.addEventListener('click', () => {
// //     volumeBtn.classList.toggle('active');
// //     volumeSlider.classList.toggle('active');
// // })
// //
// // volumeSlider.addEventListener('input', () => {
// //     music.volume = volumeSlider.value;
// // })
// //
// //
