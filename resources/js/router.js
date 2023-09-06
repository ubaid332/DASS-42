import { createRouter, createWebHistory } from 'vue-router';
import login from './pages/login/login.vue';
import dashboard from './pages/dashboard/index.vue';
import dass_42 from './pages/dass_42/index.vue';
import create_dass_42 from './pages/dass_42/create.vue';

import anxiety_4 from './pages/anxiety_4/index.vue';
import create_anxiety_4 from './pages/anxiety_4/create.vue';

import depression_4 from './pages/depression_4/index.vue';
import create_depression_4 from './pages/depression_4/create.vue';

import stress_4 from './pages/stress_4/index.vue';
import create_stress_4 from './pages/stress_4/create.vue';

import LogOut from './pages/login/logout.vue' 




const routes = [
    {path:"/",component:login , name:'Login'},
    {path:"/logout",component:LogOut , name:'LogOut'},
    {path:"/dashboard",component:dashboard , name:'Dashboard'},

    {path:"/dass_42",component:dass_42 , name:'dass_42'},
    {path:"/dass_42/create",component:create_dass_42 , name:'create_dass_42'},

    {path:"/anxiety_4",component:anxiety_4 , name:'anxiety_4'},
    {path:"/anxiety_4/create",component:create_anxiety_4 , name:'create_anxiety_4'},

    {path:"/depression_4",component:depression_4 , name:'depression_4'},
    {path:"/depression_4/create",component:create_depression_4 , name:'create_depression_4'},

    {path:"/stress_4",component:stress_4 , name:'stress_4'},
    {path:"/stress_4/create",component:create_stress_4 , name:'create_stress_4'},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  })
  
  export default router;