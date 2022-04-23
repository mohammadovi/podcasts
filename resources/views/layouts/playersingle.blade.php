<div id="music-container" class="music-container d-flex ltr   " style="margin: 0">

    <div class="music-info d-none">
        <h4 id="title" style="direction: rtl"></h4>

    </div>

    <audio src="{{$podcast->audio}}" id="audio"></audio>
    <div  class="img-container2 ">
        <img src="{{$podcast->image}}"
             alt="cover-music" id="cover">
    </div>

    <div class="navigation d-flex align-items-center
                justify-content-center ">


        <button id="prev" class="action-btn d-none ">
            <i class="fas fa-backward "></i>
        </button>

        <button id="play" class="action-btn
                    action-btn-big ">
            <i class="fas fa-play"></i>
        </button>

        <button id="next" class="action-btn d-none">
            <i class="fas fa-forward "></i>

        </button>
        <button id="download" class="action-btn ">
            <i class="fas fa-heart"></i>
        </button>
        <button id="share" class="action-btn ">
            <i class="fas fa-star"></i>
        </button>

        <button id="share" class="action-btn ">
            <i class="fas fa-share-alt-square"></i>
        </button>

    </div>
    <div id="progress-container" class="progress-container2 w-100 position-absolute
    top-0 ">
        <div class="progress " id="progress"></div>
        <span id="currTime" class="d-flex justify-content-end d-inline"></span>
    </div>


</div>
























