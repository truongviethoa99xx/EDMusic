$(document).ready(function () {

//gọi api zingmp3
    axios({
        method: 'get',
        url: 'https://mp3.zing.vn/xhr/chart-realtime?songId=0&videoId=0&albumId=0&chart=song&time=-1',
    })
        .then(function (res) {
            let songData = res.data.data.song;
            let songCare = ''
            songData.map(sData => {
                songCare += `<div class="play-item row">
                                <div class="media-left col-lg-4">
                                    <i class='bx bxs-music' ></i>
                                    <div class="media-left-img">
                                        <img src="${sData.thumbnail}" alt="">
                                    </div>
                                    <div class="media-info">
                                        <p class="title">
                                            ${sData.title}
                                        </p>
                                        <p class="singer">${sData.artists_names}</p>
                                    </div>
                                </div>
                                <div class="media-ablum col-lg-6">
                                    ${sData.album ? `${sData.album.name}` : `Chưa có` }
                                </div>
                                <div class="media-right col-lg-2 text-right">
                                    <div class="media-icon">
                                        <i class='bx bxs-microphone' ></i>
                                        <i class='bx bx-heart' ></i>
                                        <i class='bx bx-dots-horizontal-rounded' ></i>
                                    </div>
                                    <p>03:00</p>
                                </div>
                        </div>`
                $('#listSongCare').html(songCare);
            });
            console.log(songCare);

        });

    let swiper = new Swiper(".compose", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
        },
    });

    $('#btn-action').on('click', function (){
        $('#img-action').toggleClass('active');
        if($('#btn-action i').hasClass('bxs-right-arrow')){
            $('.btn-action-text').text('Tạm dừng')
            $('#btn-action i').removeClass('bxs-right-arrow').addClass('bx-pause');
            $('.wave-action').prepend("<div class=\"wave-box\">\n" +
                "                                <div class=\"wave-item wave1\"></div>\n" +
                "                                <div class=\"wave-item wave2\"></div>\n" +
                "                                <div class=\"wave-item wave3\"></div>\n" +
                "                                <div class=\"wave-item wave4\"></div>\n" +
                "                            </div>");

        }else{
            $('.btn-action-text').text('Tiếp tục phát')
            $('#btn-action i').removeClass('bx-pause').addClass('bxs-right-arrow');
            $('.wave-action .wave-box').remove()
        }
    })

})
