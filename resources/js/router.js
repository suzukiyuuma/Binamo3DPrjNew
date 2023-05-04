import Router from 'vue-router'
import Home from './components/Home.vue'
import Test from './components/Test.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/test',
      name: 'test',
      component: Test
    },
  ]
});