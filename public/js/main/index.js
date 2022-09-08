$(function () {
    startSearch();
    $("#change-theme-background").on("click", function () {
        console.log("change-theme-background");
        document.documentElement.style.setProperty("--theme-color", "#130118f5");
    });
});

function startSearch() {
    const search = document.querySelector(".search");
    const input = search.querySelector("input");
    const label = search.querySelector("label");
    const btnListen = search.querySelector("#dictate");
    const btnSearch = search.querySelector("#search");
    let listening = false;
    var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
    /*
     * Sau 1s hiển thị mic
     */
    if (SpeechRecognition) {
        setTimeout(function () {
            btnListen.classList.add("show");
            label.querySelector("span").classList.add("show");
        }, 1000);
    }

    /*
     * Sự kiện thu âm sau khi bấm nút ghi âm
     */
    btnListen.addEventListener("click", function () {
        if (!listening) {
            const recognition = new SpeechRecognition();
            recognition.onstart = function () {
                btnListen.classList.add("active");
                listening = true;
            };

            recognition.onspeechend = function () {
                recognition.stop();
                btnListen.classList.remove("active");
                listening = false;
            };

            recognition.onerror = function () {
                btnListen.classList.remove("active");
                listening = false;
            };

            recognition.onresult = function (event) {
                const transcript = event.results[0][0].transcript;
                const confidence = event.results[0][0].confidence;

                input.value = transcript;
                input.focus();
                if (transcript.length > 0) {
                    label.classList.add("a11y-hidden");
                }
            };
            recognition.start();
        }
    });
}
