import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MovieDetailView from '../views/MovieDetailView.vue'
import LoginView from '../views/LoginView.vue'
import RegisterView from '../views/RegisterView.vue'
import AdminHomeView from '../views/AdminHomeView.vue'
import AdminCreateMovieView from '../views/AdminCreateMovieView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: HomeView
    },    
    {
      path: '/movies/:id',
      name: 'MovieDetailView',
      component: MovieDetailView
    },
    {
      path: '/login',
      name: 'Login',
      component: LoginView
    },
    {
      path: '/register',
      name: 'Register',
      component: RegisterView
    },
    {
      path: '/admin/movies',
      name: 'AdminHomeView',
      component: AdminHomeView
    },
    {
      path: '/admin/create',
      name: 'AdminCreateMovieView',
      component: AdminCreateMovieView
    }
  ]
})

export default router
