<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')





    <body class=" container d-flex flex-column align-items-center"
          style="background-image: linear-gradient(0deg,rgb(247,247,247)23.8%,rgb(252,221,221)92%);">
        {{--<div class="container-fluid ltr bg-light slider_container d-flex justify-content-center w-100 mw-100 align-items-center">--}}
        {{--    <audio id="player" controls src="">--}}

        {{--    </audio>--}}

        {{--    <div class="playpause-track "  id="playpause-track">--}}
        {{--        <i class="bi bi-play-circle bi-5x" > </i>--}}
        {{--    </div>--}}
        {{--    <div class="current-time">00:00</div>--}}
        {{--    <input type="range" min="1" max="100" value="0" class="seek_slider" >--}}
        {{--    <div class="total-duration">00:00</div>--}}
        {{--</div>--}}
        {{--<ul id="playlist">--}}
        {{--    <li><a href="/main/assets/audio/kalimba.mp3">1</a></li>--}}
        {{--    <li><a href="/main/assets/audio/kalimba.mp3">2</a></li>--}}
        {{--    <li><a href="/main/assets/audio/kalimba.mp3">3</a></li>--}}
        {{--</ul>--}}


            <h1>MusicPlayer</h1>
        <audio src="/main/assets/audio/Kalimba.mp3" id="player" volumechange></audio>
            <div id="music-container" class="music-container d-flex
            position-relative ltr bg-light  ">
                <div class="music-info">
                    <h4 id="title"></h4>
                    <div id="progress-container" class="progress-container">
                        <div class="progress" id="progress"></div>
                    </div>
                    <span id="currTime"></span>
                    <span>-----------------------</span>
                    <span id="durTime"></span>
                </div>
                <audio src="/main/assets/audio/kalimba.mp3" id="audio"></audio>
                <div  class="img-container position-relative">
                    <img src="/main/assets/img/posterepisod/1.jpg"
                           alt="cover-music" id="cover">
                </div>
                <div class="navigation d-flex align-items-center
                justify-content-center ">


                    <button id="prev" class="action-btn bg-light">
                        <i class="fas fa-fast-backward"></i>
                    </button>

                    <button id="play" class="action-btn bg-light
                    action-btn-big ">
                        <i class="fas fa-play"></i>
                    </button>

                    <button id="next" class="action-btn bg-light">
                        <i class="fas fa-forward"></i>
                    </button>
                </div>
            </div>


        {{----}}









    @include('layouts.footer')
    </body>

</html>























