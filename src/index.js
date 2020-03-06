import Vue from 'vue'
import App from './App.vue'
import Meta from 'vue-meta';
import VueTheMask from 'vue-the-mask'


Vue.use(VueTheMask);
Vue.use(Meta);

import './js/'
import './assets/css/main.css'
import './assets/scss/main.scss'

import store from './store'


new Vue({
    el: '#app',
    store,
    render: h => h(App),
})