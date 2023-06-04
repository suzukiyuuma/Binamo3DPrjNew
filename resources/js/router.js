import Router from 'vue-router'
import BaseTextBox from './components/BaseTextBox.vue'
import BaseLabel from './components/BaseLabel.vue'
import BaseButton from './components/BaseButton.vue'
import BaseTextLabel from './components/BaseTextLabel.vue'
import SearchContents from './components/SearchContents.vue'

// メイン画面
import Login from './components/Login.vue'
import RegisterUser from './components/RegistUser.vue'

export default new Router({
  mode: 'history',
  routes: [
    // ログイン画面
    {
      path: '/Login',
      name: 'Login',
      component: Login
    },
    // 会員登録画面
    {
      path: '/RegistUser',
      name: 'RegistUser',
      component: RegisterUser
    },
    // メイン画面
    {
      path: '/SearchContents',
      name: 'SearchContents',
      component: SearchContents
    },
  ]
});