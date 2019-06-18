// Vue core
import Vue from 'vue'
import VueRouter from 'vue-router'
import './bootstrap'

// View templates
import HomeTemplate from './views/HomeTemplate'
import MembersTemplate from './views/MembersTemplate'
import ClanCharterTemplate from './views/ClanCharterTemplate'
import RecruitingCenterTemplate from './views/RecruitingCenterTemplate'
import NavigationBar from './components/NavbarComponent'

// Cookie Law
import CookieLaw from 'vue-cookie-law'

// Routing
Vue.use(VueRouter);

const routes = [{
        path: '/',
        name: 'home',
        component: HomeTemplate
    },
    {
        path: '/members',
        name: 'members',
        component: MembersTemplate
    },
    {
        path: '/charter',
        name: 'charter',
        component: ClanCharterTemplate
    },
    {
        path: '/recruiting',
        name: 'recruiting',
        component: RecruitingCenterTemplate
    }
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#application',
    router: router,

    components: {
        'navigation-bar': NavigationBar,
        'cookie-law': CookieLaw
    },

    data: {

    }
});
