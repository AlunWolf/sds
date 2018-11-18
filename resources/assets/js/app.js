
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

const app = new Vue({
    el: '#app',
    created(){

    }
});

//Listening to the broadcast Chat
// Echo.private('Chat').listen('sendPrivateMessage', (message) => {
//     var id = $('meta[name="userID"]').attr('content');
//     var divMessages = $('.chatMessages');
//     var msg;
//     if(message.intSend == id){
//         msg = '<div class="messageSend">'
//     }else if(message.intReceive == id){
//         msg = '<div class="messageReceived">'
//     }
//     var finalMsg = msg + message.strMessage + '</div>';
//     divMessages.append(finalMsg);
// });

