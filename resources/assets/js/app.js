require('./bootstrap');

window.Vue = require('vue');

import { BootstrapVue } from 'bootstrap-vue'


// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)


Vue.component('contact-component', require('./components/ContactComponent.vue'));
Vue.component('contact-list-component', require('./components/ContactListComponent.vue'));
Vue.component('active-conversation-component', require('./components/ActiveConversationComponent.vue'));
Vue.component('message-conversation-component', require('./components/MessageConversationComponent.vue'));

const app = new Vue({
    el: '#app',
    methods:{
        logout(){
            document.getElementById('logout-form').submit();
        }
    }
});
