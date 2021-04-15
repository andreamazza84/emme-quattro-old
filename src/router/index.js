//http://localhost:8880/wp-json/wp/v2/prodotti

import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Prodotti from '../views/Prodotti.vue'
import Servizi from '../views/Servizi.vue'
import News from '../views/News.vue'
import Contatti from '../views/Contatti.vue'
import AreaClienti from '../views/AreaClienti.vue'

import ProdottiDescrizione from '../views/ProdottiDescrizione.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/chi-siamo',
    name: 'About',
    component: About
  },
  {
    path: '/prodotti',
    name: 'Prodotti',
    props: true,
    component: Prodotti,
    children: [{ 
        path: ":slug",
        name: "ProdottiDescrizione",
        props: true,
        component: ProdottiDescrizione
        //component: () => import(/* webpackChunkName: "ProdottiDescrizione" */ "../views/ProdottiDescrizione.vue"),
    }]
  },
  {
    path: '/servizi',
    name: 'Servizi',
    component: Servizi
  },
  {
    path: '/news',
    name: 'News',
    component: News
  },
  {
    path: '/contatti',
    name: 'Contatti',
    component: Contatti
  },
  {
    //LAZY LOAD
    path: '/area-clienti',
    name: 'AreaClienti',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AreaClienti.vue')
  },
]

const router = new VueRouter({
  routes
})

export default router
