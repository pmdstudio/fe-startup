import "bootstrap";

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
