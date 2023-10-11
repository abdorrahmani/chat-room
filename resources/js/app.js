import './bootstrap';
import Alpine from 'alpinejs';
import { createApp } from "vue";
import ChatMessages from './components/ChatMessages.vue';
import ChatForm from './components/ChatForm.vue';

window.Alpine = Alpine;

Alpine.start();


const app = createApp({
    data() {
        return {
            messages: []
        };
    },
    created() {
        this.fetchMessages();
    },
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        addMessage(message) {
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
                console.log(response.data);
            });
        }
    }
});

app.component('chat-messages', ChatMessages);
app.component('chat-form', ChatForm);

app.mount('#app');

// resources/assets/js/app.js

Echo.private('chat')
    .listen('MessageSent', (e) => {
        this.messages.push({
            message: e.message.message,
            user: e.user
        });
    });
