
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('companies-component', require('./components/CompaniesComponent.vue'));
Vue.component('clients-component', require('./components/ClientsComponent.vue'));
Vue.component('spinner-component', require('./components/SpinnerComponent.vue'));

const app = new Vue({
    el: '#app'
});
