import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'
import PerfectScrollbar from 'perfect-scrollbar'
import 'flowbite';
import Cropper from 'cropperjs';

// Icons
const sunIcon = document.querySelector(".sun");
const moonIcon = document.querySelector(".moon");

// Theme
let userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

// Icon Toggling
const iconToggle = () => {
    // moonIcon.classList.toggle("display-none");
    // sunIcon.classList.toggle("display-none");
    const sunIcon = document.querySelector(".sun");
    const moonIcon = document.querySelector(".moon");

    if (userTheme === "dark") {
        moonIcon.style.display = "none";
        sunIcon.style.display = "block";
    } else {
        sunIcon.style.display = "none";
        moonIcon.style.display = "block";
    }
}

// Initial Theme Check
const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
        // moonIcon.classList.add("display-none");
        moonIcon.style.display = "none";
        sunIcon.style.display = "block";
        return;
    }
    // sunIcon.classList.add("display-none");
    sunIcon.style.display = "none";
    moonIcon.style.display = "block";
}

// Manual Theme Switch
const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        userTheme = "light";
        iconToggle();
        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    userTheme = "dark";
    iconToggle();
}

// call theme switch on clicking buttons
sunIcon.addEventListener("click", () => {
    themeSwitch();
})
moonIcon.addEventListener("click", () => {
    themeSwitch();
})

// invoke theme check on initial load
themeCheck();