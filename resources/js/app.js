import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import SearchImageList from './components/SearchImageList.vue';
import SearchImage from './components/SearchImage.vue';

createApp({})
    .component('SearchImageList', SearchImageList)
    .component('SearchImage', SearchImage)
    .mount('#searchApp')
