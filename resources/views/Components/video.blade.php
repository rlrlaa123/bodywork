<style>
    .video-wrapper {
        position: relative;
        margin: 0 50px;
        cursor: pointer;
    }
    .video-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transition: 1.5s all;
        width: 10%;
        transform: translateX(-50%) translateY(-50%);
        max-width: 64px;
        max-height: 64px;
    }
    .video {
      max-height: 750px;
    }

    @media (orientation: portrait) {
        .video-wrapper {
            margin: 0;
        }
    }
</style>
<div class="video-wrapper">
    <img id="video-control" class="video-play-btn" src="/img/play.png">
    <video class="d-block w-100 video" src="/{{ $home->video }}" preload="metadata">
</div>