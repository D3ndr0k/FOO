    let animar = document.querySelectorAll(".animacion");

    function ShowScroll() {
        let AlturaScroll = document.documentElement.scrollTop;
        for (let i = 0; i < animar.length; i++) {
            let Altura_Animacion = animar[i].offsetTop;
            if (Altura_Animacion - 400 < AlturaScroll) {
                animar[i].style.opacity = 1;

            }
        }
    }
    window.addEventListener('scroll', ShowScroll);