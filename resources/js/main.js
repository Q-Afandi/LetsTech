
let mixerProducts = mixitup(".products__content", {
    selectors: {
        target: ".products__card",
    },
    animation: {
        duration: 300,
    },
});

mixerProducts.filter(".all");

const linkProducts = document.querySelectorAll(".products__item");

function activeProducts() {
    linkProducts.forEach((link) => link.classList.remove("active-list-phone-item"));
    this.classList.add("active-list-phone-item");
}

linkProducts.forEach((l) => l.addEventListener("click", activeProducts));

/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        968: {
            slidesPerView: 2,
        },
    },
});
