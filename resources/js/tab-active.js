import Alpine from 'alpinejs';
import 'flowbite';

window.addEventListener('load', function () {
    var urlParams = new URLSearchParams(window.location.search);
    var activeTab = urlParams.get('activeTab');
    if (activeTab) {
        Alpine.data('yourComponent').$data.activeTab = activeTab;
    }
});