import Router from 'vue-router'
import BaseTextBox from './components/BaseTextBox.vue'
import BaseLabel from './components/BaseLabel.vue'
import BaseButton from './components/BaseButton.vue'
import BaseTextLabel from './components/BaseTextLabel.vue'
import Login from './components/Login.vue'

export default new Router({
  mode: 'history',
  routes: [
    // ログイン画面
    {
      path: '/Login',
      name: 'Login',
      component: Login
    },
  ]
});