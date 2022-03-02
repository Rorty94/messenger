require('./bootstrap');

window.Vue = require('vue');

import { BootstrapVue } from 'bootstrap-vue'


// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    methods:{
        logout(){
            document.getElementById('logout-form').submit();
        }
    }
});
