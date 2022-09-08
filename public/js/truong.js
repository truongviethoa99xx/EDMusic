
//gọi api zingmp3
axios({
    method: 'get',
    url: 'https://mp3.zing.vn/xhr/recommend?type=audio&id=ZW67OIA0',
})
.then(function (res) {
    let data = res.data.data.items;
    console.log(data);
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
            "                                <div class=\"wave wave1\"></div>\n" +
            "                                <div class=\"wave wave2\"></div>\n" +
            "                                <div class=\"wave wave3\"></div>\n" +
            "                                <div class=\"wave wave4\"></div>\n" +
            "                            </div>");

    }else{
        $('.btn-action-text').text('Tiếp tục phát')
        $('#btn-action i').removeClass('bx-pause').addClass('bxs-right-arrow');
        $('.wave-action .wave-box').remove()
    }
})
