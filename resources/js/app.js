require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('post-category-component', require('./components/PostCategoryComponent.vue').default);

const app = new Vue({
    el: '#app',
});
