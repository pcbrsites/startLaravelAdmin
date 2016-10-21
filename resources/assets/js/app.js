
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import AdmCard from './components/uikits/admCard.vue';
import AdmCardHeader from './components/uikits/admCardHeader.vue';
import AdmCardContent from './components/uikits/admCardContent.vue';
import AdmSidebar from './components/uikits/admSidebar.vue';

import VueInternationalization from 'vue-i18n';
import Locales from './vue-i18n-locales.generated.js';

Vue.use(VueInternationalization, {
    lang: 'en',
    locales: Locales
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('sidebar',AdmSidebar);
Vue.component('card',AdmCard);
Vue.component('cardHeader',AdmCardHeader);
Vue.component('cardContent',AdmCardContent);
const app = new Vue({
    el: '#app'
});
