const store = new Vuex.Store({
    state: {
      titulo: ''
    },
    mutations: {

    }
})


const Inicio = { template: '<web-inicio></web-inicio>' }
const Web_cotizaciones = { template: '<web-cotizaciones></web-cotizaciones>' }
const Web_buscador = { template: '<web-buscador></web-buscador>' }
const Inicio_restablecer = { template: '<inicio-restablecer></inicio-restablecer>' }
const Inicio_rescontra = { template: '<inicio-rescontra></inicio-rescontra>' }
const Inicio_registro = { template: '<inicio-registro></inicio-registro>' }

const routes = [
  { path: '/', component: Inicio },
  { path: '/web-cotizaciones', component: Web_cotizaciones },
  { path: '/web-buscador', component: Web_buscador },
  { path: '/inicio-restablecer', component: Inicio_restablecer },
  { path: '/inicio-rescontra', component: Inicio_rescontra },
  { path: '/inicio-registro', component: Inicio_registro }
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
})
  
const app = Vue.createApp({
    data() {
        return {
            
        }
    }
})