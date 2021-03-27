require("./bootstrap");

window.Vue = require("vue");
import Vue from "vue";
Vue.component("ranking", require("./components/ranking.vue").default);
const app = new Vue({
    el: "#app",
});
