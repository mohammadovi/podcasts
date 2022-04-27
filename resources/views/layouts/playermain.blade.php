            <div id="music-container" class="music-container d-flex ltr   ">

                <div class="music-info">
                    <h4 id="title" style="direction: rtl">{{$lastPodcast->title}}</h4>
                    <h4 id="title2" style="direction: rtl">{{$lastPodcast->title}}</h4>
                    <span id="currTime" class="d-flex d-inline"></span>
                    <div id="progress-container" class="progress-container">
                        <div class="progress" id="progress"></div>
                    </div>
{{--                    <span id="durTime"></span>--}}
                </div>
                <audio src="{{$lastPodcast->audio}}" id="audio"></audio>


                <div  class="img-container position-relative">
                    <img src="{{$lastPodcast->image}}" class="bg-dark img-fluid" alt="cover-music" id="cover">

                </div>
                <div class="navigation d-flex align-items-center
                justify-content-center ">


                    <button id="prev" class="action-btn ">
                        <i class="fas fa-backward"></i>
                    </button>

                    <button id="play" class="action-btn
                    action-btn-big ">
                        <i class="fas fa-play"></i>
                    </button>

                    <button id="next" class="action-btn ">
                        <i class="fas fa-forward"></i>

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
            </div>
























