// VIDEOS DE ENLACES

const videos = document.querySelectorAll(".video-wrapper");

videos.forEach(wrapper => {

    const video = wrapper.querySelector("video");
    const btnSonido = wrapper.querySelector(".btn-sonido");

    btnSonido.addEventListener("click", () => {

        video.muted = !video.muted;

        if (video.muted) {
            btnSonido.textContent = "🔇 Activar sonido";
        } else {
            btnSonido.textContent = "🔊 Silenciar";
        }

    });

});