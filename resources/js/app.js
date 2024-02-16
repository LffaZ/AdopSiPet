// import { loadConfigFromFile } from 'vite';
import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'
import PerfectScrollbar from 'perfect-scrollbar'
import 'flowbite';
import Cropper from 'cropperjs';

window.Alpine = Alpine;
Alpine.start();
window.PerfectScrollbar = PerfectScrollbar

Alpine.data('example', () => ({
    currentUrl: window.location.href,
    getCurrentUrl() {
        this.currentUrl = window.location.href;
        console.log(this.currentUrl)
    },
}));

const numericInput = document.getElementById("hargapet");

numericInput.addEventListener("input", function (event) {
    // Mendapatkan nilai input tanpa karakter non-numeric dan tanpa leading zero
    let sanitizedValue = event.target.value.replace(/\D/g, "");

    // Memastikan bahwa angka pertama tidak 0
    if (sanitizedValue.length > 1 && sanitizedValue.charAt(0) === "0") {
        sanitizedValue = sanitizedValue.substr(1);
    }

    // Mengatur nilai input
    event.target.value = sanitizedValue;
});

const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-file");
const imageView = document.getElementById("img-view");
const cropperImage = document.getElementById("cropper-image");

inputFile.addEventListener("change", uploadImage);

function uploadImage() {
    let imgLink = URL.createObjectURL(inputFile.files[0])
    imageView.style.backgroundImage = `url(${imgLink})`
    imageView.textContent = ""
    imageView.style.border = 0
    cropperImage.src = imgLink;
    cropperImage.style.display = "block";

    initCropper();
}

dropArea.addEventListener("dragover", function (e) {
    e.preventDefault()
})
dropArea.addEventListener("drop", function (e) {
    e.preventDefault()
    inputFile.files = e.dataTransfer.files
    uploadImage()
})

document.getElementById('submit-all-forms').addEventListener('click', function() {
    // Collect data from all forms
    var formDataPet = new FormData(document.getElementById('form-pet'));
    var formDataPetPhoto = new FormData(document.getElementById('form-pet-photo'));
    var formDataPetDetail = new FormData(document.getElementById('form-pet-detail'));
    var formDataPetHealth = new FormData(document.getElementById('form-pet-health'));

    // Collect selected values from stts_vaksin checkboxes
    var checkboxesVaksin = document.querySelectorAll('input[name="stts_vaksin"]:checked');
    var selectedValuesVaksin = [];
    checkboxesVaksin.forEach(function(checkbox) {
        selectedValuesVaksin.push(checkbox.value);
    });
    var combinedValuesVaksin = selectedValuesVaksin.join(', ');
    console.log(combinedValuesVaksin);

    // Collect selected values from riwayat_penyakit checkboxes
    var checkboxesRiwayat = document.querySelectorAll('input[name="riwayat_penyakit"]:checked');
    var selectedValuesRiwayat = [];
    checkboxesRiwayat.forEach(function(checkbox) {
        selectedValuesRiwayat.push(checkbox.value);
    });
    var combinedValuesRiwayat = selectedValuesRiwayat.join(', ');

    // Append selected values to the appropriate form data
    formDataPet.append('stts_vaksin', combinedValuesVaksin);
    formDataPetHealth.append('riwayat_penyakit', combinedValuesRiwayat);

    // Merge all form data into one FormData object
    var formDataCombined = new FormData();
    formDataCombined.append('petData', formDataPet);
    formDataCombined.append('petPhotoData', formDataPetPhoto);
    formDataCombined.append('petDetailData', formDataPetDetail);
    formDataCombined.append('petHealthData', formDataPetHealth);

    // Send combined form data to server
    fetch("/petcontributor/pets/store-all", {
        method: 'POST',
        body: formDataCombined
    })
    .then(response => {
        // Handle response from server
    })
    .catch(error => {
        // Handle error
    });
});


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

const setup = () => {
    return {
        watchScreen() {
            if (window.innerWidth <= 1024) {
                this.isSidebarOpen = false
                this.isSecondSidebarOpen = false
            } else if (window.innerWidth >= 1024) {
                this.isSidebarOpen = true
                this.isSecondSidebarOpen = true
            }
        },
        isSidebarOpen: window.innerWidth >= 1024 ? true : false,
        toggleSidbarMenu() {
            this.isSidebarOpen = !this.isSidebarOpen
        },
        isSecondSidebarOpen: window.innerWidth >= 1024 ? true : false,
        toggleSecondSidbarColumn() {
            this.isSecondSidebarOpen = !this.isSecondSidebarOpen
        },
        isSettingsPanelOpen: false,
        openSettingsPanel() {
            this.isSettingsPanelOpen = true
            this.$nextTick(() => {
                this.$refs.settingsPanel.focus()
            })
        },
        isSearchPanelOpen: false,
        openSearchPanel() {
            this.isSearchPanelOpen = true
            this.$nextTick(() => {
                this.$refs.searchInput.focus()
            })
        },
    }
}

