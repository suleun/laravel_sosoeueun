import Vue from 'vue';
import App from './App.vue';

export function createApp(selector, options) {
    new Vue({
        el: selector,
        render(h) {
            return h(App, { props: options });
        }
    })
};