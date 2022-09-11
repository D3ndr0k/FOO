let Animar = document.querySelectorAll(".animacion");

function showScroll() {
    let alturaScroll = document.documentElement.scrollTop + 150;

    for (let i = 0; i < Animar.length; i++) {
        let alturaAnimacion = Animar[i].offsetTop;
        if (alturaAnimacion - 200 < alturaScroll) {
            Animar[i].style.opacity = 1;
        }
    }
}
window.addEventListener('scroll', showScroll);