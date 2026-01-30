import "bootstrap";

import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// init Swiper:
const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
    grid: {
        rows: 3,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});

// switch grid/list view for programs page

function switchView(view, container) {
    const containerSection = document.querySelector(container);
    const gridBtn = document.getElementById("grid-view-btn");
    const listBtn = document.getElementById("list-view-btn");

    if (!containerSection) {
        return;
    }
    if (view === "grid") {
        containerSection.classList.add("grid");
        gridBtn.classList.add("active");
        listBtn.classList.remove("active");
    } else {
        containerSection.classList.remove("grid");
        listBtn.classList.add("active");
        gridBtn.classList.remove("active");
    }
}

// window.switchView = switchView;

const gridBtn = document.getElementById("grid-view-btn");
const listBtn = document.getElementById("list-view-btn");

if (gridBtn && listBtn) {
    gridBtn.addEventListener("click", function (e) {
        e.preventDefault();
        switchView("grid", ".programs");
    });

    listBtn.addEventListener("click", function (e) {
        e.preventDefault();
        switchView("list", ".programs");
    });
}
