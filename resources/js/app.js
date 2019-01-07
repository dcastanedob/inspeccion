import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './components/App.vue'

import routes from './routes.js'

Vue.use(VueRouter)

const router = new VueRouter({
  routes,
  mode: 'history'
})

new Vue({
  el: '#app',
  render: h => h(App),
  router
})

Vue.config.devtools = true
