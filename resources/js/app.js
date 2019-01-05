require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import Vuetify from 'vuetify'

 
Vue.use(Vuetify)

import User from './Helpers/User'
window.User = User

window.EventBus = new Vue();

console.log(User.loggedIn())
console.log(User.id())

Vue.component('AppHome', require('./components/AppHome.vue').default);

import router from './Router/router.js'

const app = new Vue({
    el: '#app',
    router
});
