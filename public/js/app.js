import '../css/app.css'; // Custom app CSS
import '../css/bootstrap.min.css';
import '../css/all.min.css';
import '../css/animate.css';
import '../css/magnific-popup.css';
import '../css/meanmenu.css';
import '../css/swiper-bundle.min.css';
import '../css/nice-select.css';
import '../css/main.css';
import '../sass/main.scss';

import $ from 'jquery';
window.$ = window.jQuery = $;  // Make jQuery globally available

import Swiper from 'swiper';
import 'swiper/css';

import './viewport.jquery.js';
import './bootstrap.bundle.min.js';
import './jquery.nice-select.min.js';
import './jquery.waypoints.js';
import './jquery.counterup.min.js';
import './swiper-bundle.min.js';
import './jquery.meanmenu.min.js';
import './jquery.magnific-popup.min.js';
import WOW from 'wow.js';
import './main.js';


import '@fortawesome/fontawesome-free/js/all.js';
import '@fortawesome/fontawesome-free/css/all.min.css';

import './bootstrap'; // Bootstrap JS if needed
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// ✅ Initialize WOW.js animations
document.addEventListener("DOMContentLoaded", function () {
    new WOW().init();

    new Swiper('.service-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.array-next',
            prevEl: '.array-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});

// ✅ Import all JavaScript files dynamically from the `resources/js/` folder
const requireModules = import.meta.glob('./*.js', { eager: true });

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

console.log("All JS files in `resources/js/` loaded successfully!");
