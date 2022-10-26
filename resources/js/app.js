import './bootstrap';

import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

import WelcomeComponent from '../vue/WelcomeComponent.vue'

const app = new Vue({
  vuetify: new Vuetify(),
  el: '#app',
  components: {
    WelcomeComponent
  }
})