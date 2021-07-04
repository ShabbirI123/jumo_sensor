require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('welcome-component', require('./components/Welcome.vue').default);
Vue.component('app-component', require('./components/App').default);
Vue.component('body-component', require('./components/Body').default);
Vue.component('about-component', require('./components/About').default);
Vue.component('login-component', require('./components/Login').default);
Vue.component('header-component', require('./components/Header').default);
Vue.component('footer-component', require('./components/Footer').default);

const header = new Vue({
    el: '#header',
});

const app = new Vue({
    el: '#app',
});

const footer = new Vue({
    el: '#footer',
});

const login = new Vue({
    el: '#login',
});
