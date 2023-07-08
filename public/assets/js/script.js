window.onload = function () {

    if (Swiper) {
        const topExploreSwiper = new Swiper("#top-explore .swiper", {
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

        const recentSearchSwipe = new Swiper("#recent-search .swiper", {
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

        const all = new Swiper(".swiper", {
            // Optional parameters
            direction: "horizontal",
            slidesPerView: 2.2,
            spaceBetween: 24,
            // Navigation arrows
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            },
        });
    }
    
};



