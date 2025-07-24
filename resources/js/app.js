import './bootstrap.js';
import '../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import Toast, { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    return pages[`./Pages/${name}.vue`];
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.use(plugin);
    app.use(Toast);
    app.mount(el);
    app.config.globalProperties.$toast = toast;
  },
});
