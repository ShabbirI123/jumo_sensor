require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('welcome-component', require('./components/Welcome.vue').default);
Vue.component('app-component', require('./components/App').default);
Vue.component('body-component', require('./components/Body').default);
Vue.component('about-component', require('./components/About').default);
Vue.component('header-component', require('./components/Header').default);
Vue.component('footer-component', require('./components/Footer').default);

const app = new Vue({
    el: '#app',
});

