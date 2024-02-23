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

const numericInput = document.getElementById("harga");

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
const multipleImage = document.querySelectorAll('input[name="images[]"]');
const inputFile = document.getElementById("input-file");
const imageView = document.getElementById("img-view");
const imagePreview = document.getElementById("img-preview");
const imagePrapreview = document.getElementById("img-prapreview");
const cropperImage = document.getElementById("cropper-image");

inputFile.addEventListener("change", uploadImage);

function uploadImage() {
    let imgLink = URL.createObjectURL(inputFile.files[0])
    imageView.style.backgroundImage = `url(${imgLink})`
    // imagePreview.style.backgroundImage = `url(${imgLink})`
    // imagePrapreview.style.display = 'flex';
    imageView.textContent = "";
    imageView.style.border = 0;
    cropperImage.src = imgLink;
    cropperImage.style.display = "block";
}

// multipleImage.addEventListener("change", function () {
//     if (this.files.length > 5) {
//         alert('Anda hanya dapat mengunggah maksimal 5 gambar.');
//         this.value = ''; // Bersihkan nilai input jika melebihi batas
//     }
// })
dropArea.addEventListener("dragover", function (e) {
    e.preventDefault()
})
dropArea.addEventListener("drop", function (e) {
    e.preventDefault()
    inputFile.files = e.dataTransfer.files
    uploadImage()
})


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

