
require('./bootstrap');

window.Vue = require('vue');

// import vue-router
import VueRouter from 'vue-router';
// use vue-router inside vue
Vue.use(VueRouter);

// import list of routes
import { routes } from './routes';

//Register Routes
const router = new VueRouter({
    routes, 
    mode: 'hash',

})

const app = new Vue({
    el: '#app',
    router
});
