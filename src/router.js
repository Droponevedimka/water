import Vue from 'vue'
import VueRouter from 'vue-router'

const MainComponent = () => import("./components/Main/Main.vue");

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    hashbang: false,
    routes: [
        { path: '*',         component: MainComponent },
    ]
})