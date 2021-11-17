require('./bootstrap');

import { createApp } from "vue";

import Test from './Test.vue'

const app = createApp({});

app
.component('test', Test)
.mount("#app");
