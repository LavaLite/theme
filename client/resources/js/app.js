
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

require('datatables.net');
require('datatables.net-bs');
require('datatables.net-responsive' );
require('datatables.net-responsive-bs' );
window.toastr = require('toastr/toastr.js');
window.Sortable = require('sortablejs/Sortable.js' );
window.swal = require('sweetalert/dist/sweetalert.min.js');
window.Mustache = require('mustache/mustache.js');
require('fullcalendar/dist/fullcalendar.js');
require('chart.js/dist/Chart.js');
require('selectize/dist/js/selectize.js');
require('summernote/dist/summernote.js');
window.Dropzone = require('dropzone/dist/dropzone.js');
require('bootstrap-daterangepicker/daterangepicker.js');
require('eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');
require('jquery-validation/dist/jquery.validate.js' );
window.cropper = require('cropper/dist/cropper.js' );
require('timeago/jquery.timeago.js');
require('./scripts/main.js');
require('./scripts/theme.js');
