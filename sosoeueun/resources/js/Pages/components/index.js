import Vue from 'vue';
import App from './App.vue';
// import BootstrapVue from 'bootstrap-vue';
// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'bootstrap-vue/dist/bootstrap-vue.css';

// Vue.use(BootstrapVue);



export function createApp(selector, options) {
    new Vue({
        el: selector,
        render(h) {
            return h(App, { props: options });
        }
    })
};