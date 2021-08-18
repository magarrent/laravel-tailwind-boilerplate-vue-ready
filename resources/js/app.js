window.Vue = require("vue").default;

import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)

import App from './components/App.vue'

import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
    // { path: '/foo', component: Foo },
    // { path: '/bar', component: Bar }
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
