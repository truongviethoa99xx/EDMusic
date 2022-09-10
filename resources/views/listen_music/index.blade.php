@extends('layout.index')
@section('content')
   <link
       rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
   />
<div id="play-music-listen">
    <div class="play-container row container-fluid">
        <div class="play-left col-lg-4">
            <div class="play-left-header">
                <div id="play-img-rotate">
                    <img id="img-action" src="https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_webp/cover/3/d/f/4/3df4a79c75c3407c9866d16c41cd57d6.jpg">
                </div>
                <div class="media-content">
                    <h3 class="media-name">Nuoc mat lung trong</h3>
                    <div id="media-info">
                        <p>ngoc kara, vuong anh tu - <span>24/06/2022</span></p>
                        <p>88 nguoi yeu thich</p>
                    </div>
                    <div class="media-action">
                        <button id="btn-action"><i class='bx bxs-right-arrow' ></i><span class="btn-action-text d-block">tiep tuc phat</span></button>
                        <div class="level">
                            <i class='bx bx-heart'></i>
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="play-right col-lg-8">
            <div class="meadia-play">
                <div class="media-head">
                    <div class="media-left">
                        <p>Bài hát</p>
                    </div>
                    <div class="media-right">
                        <p>thoi gian</p>
                    </div>
                </div>
                <div class="media-head">
                    <div class="media-left">
                        <input type="checkbox">
                        <div class="media-left-img wave-action">
                            <img src="https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_webp/cover/3/d/f/4/3df4a79c75c3407c9866d16c41cd57d6.jpg" alt="">
                        </div>
                        <div class="media-info">
                            <p class="title">
                                Lorem ipsum dolor sit amet, consectetur.
                            </p>
                            <p class="singer">Johnny Dang</p>
                        </div>
                    </div>
                    <div class="media-right">
                        <p>03:00</p>
                    </div>
                </div>

                <div class="list-song">
                    <h4>co the ban quan tam</h4>
                    <div class="list" id="listSongCare">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nghệ sĩ tham gia -->
    <div class="compose-container container-fluid pt-4">
        <h3>nghe si tham gia</h3>
        <div class="swiper compose ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w480_r2x3_webp/cover_artist/6/2/8/4/62846a767a65588f0324fa06069c97b0.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w480_r2x3_webp/cover_artist/4/9/9/8/4998b23157ede157545b5d1a01800fcd.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w480_r2x3_webp/cover_artist/9/1/3/4/913455bd592bc4b44d55ed165dbbf06f.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w480_r2x3_webp/cover_artist/b/0/c/3/b0c3bc16ca25baed31d8e905ddaf8a1f.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w480_r2x3_webp/cover_artist/c/b/2/1/cb219f35fed181b8aa88f943f5142a5b.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- nhạc mới mỗi ngày -->
    <div class="new-music-container container-fluid pt-4">
        <h3>nhạc mới mỗi ngày</h3>
        <div class="swiper compose ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/8/0/0/d/800d43029b6e8cad5f7c838afc4b0af2.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/f/d/a/e/fdae414de10e867fc85f8ee583467630.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/3/d/7/0/3d700ca94ce5452b0ac5f7c8cbf2fd55.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/9/0/b/a/90bafbdc48d4f4be096a3e4aa8f45d86.jpg" alt=""></div>
                <div class="swiper-slide">
                    <div class="swiper-slide-hover level">
                        <i class="bx bx-heart"></i>
                        <i class='bx bxs-right-arrow' ></i>
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                    </div>
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/5/8/2/1/582120c1362983c78045ef4797438edb.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="js/truong.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    {{--    <!-- <script type="text/javascript" src="{{ asset('js\dashboard\index.js')}}"></script> -->--}}
@endpush
