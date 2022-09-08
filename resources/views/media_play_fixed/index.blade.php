<!doctype html>
<html lang="en">
@include('layout.head')
<link rel="stylesheet" href="/css/media_fixed.css">
<body>
    <div class="media-fixed">
        <div class="media-control">
            <div class="media-control-left">
                <img src="https://photo-resize-zmp3.zmdcdn.me/w240_r1x1_webp/cover/c/0/d/7/c0d7ef90fcd75fe4dee3fcafa1514184.jpg" alt=""  class="media-control-img">
                <div class="media-content">
                    <h5>Chung ta se la gi cua nhau</h5>
                    <p>Truong thao nhi</p>
                </div>
                <div class="level ml-2">
                    <i class='bx bx-heart'></i>
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </div>
            </div>
            <div class="media-control-center ">
                <div class="action-btns">
                    <i class='bx bx-shuffle' ></i>
                    <i class='bx bx-left-arrow' ></i>
                    <i class='bx bx-pause-circle' ></i>
                    <i class='bx bx-right-arrow'></i>
                    <i class='bx bx-repost' ></i>
                </div>
                <div class="action-range">
                    <div class="time-start">00:00</div>
                    <input type="range" class="input-range"  >
                    <div class="time-end">03:00</div>
                </div>
            </div>
            <div class="media-control-right">
                <i class='bx bxl-deezer'></i>
                <i class='bx bxs-microphone-alt' ></i>
                <i class='bx bx-windows' ></i>
                <i class='bx bx-speaker' ></i>
                <input type="range">
            </div>
        </div>
    </div>
</body>
@include('layout.script')
</html>
