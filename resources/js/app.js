import './bootstrap';
import { createApp } from 'vue';
// import App from './Components/layout/AdminLayout.vue';
import App from './App.vue';
import router from './router.js';

import Swal from 'sweetalert2';
import Noty from 'noty'
import 'noty/lib/noty.css'
import 'noty/lib/themes/mint.css'

import { Notification } from '@/helper/Notification.js';

import  User  from '@/helper/User.js';
window.User = User;

import  AppStorage  from '@/helper/AppStorage.js';
window.AppStorage = AppStorage;

window.Noty = Noty;
window.Notification = Notification;


window.Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

window.Swal = Swal;
window.Noty = Noty;


const app = createApp(App)
app.use(router);
app.mount('#app');