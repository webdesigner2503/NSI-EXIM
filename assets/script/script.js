const swiper = new Swiper(".mySwipersecond", {
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        480: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});