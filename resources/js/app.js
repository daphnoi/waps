import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import Notifications from '@kyvg/vue3-notification'
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Vue3Toastify from 'vue3-toastify';
import VueChartkick from 'vue-chartkick'
import 'chartkick/chart.js'


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueChartkick)
            .use(Notifications)
            .use (Vue3Toastify,{ autoClose: 3000 })
            .mount(el);

    },
    progress: {
        color: '#4B5563',
    },
});
