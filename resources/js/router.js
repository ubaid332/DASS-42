import { createRouter, createWebHistory } from 'vue-router';
import login from './pages/login/login.vue';
import dashboard from './pages/dashboard/index.vue';
import Category from './pages/category/index.vue';
import LogOut from './pages/login/logout.vue' 




const routes = [
    {path:"/",component:login , name:'Login'},
    {path:"/logout",component:LogOut , name:'LogOut'},
    {path:"/dashboard",component:dashboard , name:'Dashboard'},
    {path:"/category",component:Category , name:'Category'}
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  })
  
  export default router;