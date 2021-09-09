require('./bootstrap');

import { createApp } from 'vue';
import Content from './components/content/content.vue'
const app = createApp({
    data() {
        return {
            menu: 0,
            activeMenuShow:true
        }
    },
});
app.component('content', Content)
app.mount('#App');
