window.onload = function () {
    console.log("working");
    const swiper = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        slidesPerView: 3,
        spaceBetween: 24,
        // Navigation arrows
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
};
