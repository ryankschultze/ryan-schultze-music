//Importing css
import './bootstrap';
import '../css/app.css'

//Import Vue libraries
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import {createRouter, createWebHistory} from "vue-router";

import { Ziggy } from './ziggy.js';
import { ZiggyVue } from 'ziggy';

//Importing our custom components
import Welcome from "./components/welcome.vue";
import Navbar from "./components/navbar.vue";
import Sidebar from "./components/sidebar.vue";
import Card from "./components/card.vue";

//Creating router instance
const router = createRouter({
    history: createWebHistory(),
    routes:[],
})

//Create Vue App
const app = createApp({
    //We can pass the app options here:
    //We can register components here too
})

//We are not defining a root component so we'll register each component separately:
app.component('Welcome', Welcome);
app.component('Navbar', Navbar);
app.component('Sidebar', Sidebar);
app.component('Card', Card)

//We don't need this just yet because we are using web.php and api.php to handle requests
// app.use(router);
app.use(ZiggyVue, Ziggy);


//Mount the application to any div with the ID "app":
app.mount('#app')
