const mix = require('laravel-mix');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery"
    }
}).options({ processCssUrls: false });

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('./node_modules/jquery/dist/jquery.min.js', './assets/js/jquery.min.js');

mix.js('resources/js/app.js', 'assets/js')
   .extract(['axios', 'bootstrap', 'components-jqueryui', 'popper.js', 'vue', 
   	'bootstrap-daterangepicker', 'codemirror', 'datatables.net', 'datatables.net-bs',  
   	'datatables.net-dt', 'datatables.net-responsive', 'datatables.net-responsive-bs', 
   	'dropzone', 'eonasdan-bootstrap-datetimepicker', 'fullcalendar', 'jquery-validation', 
   	'mustache', 'summernote', 'sweetalert', 'timeago', 'toastr'])
   .sass('resources/sass/app.scss', 'assets/css');

mix.copyDirectory('./node_modules/font-awesome/fonts', './assets/fonts')
   .copyDirectory('./node_modules/ionicons/dist/fonts', './assets/fonts')
   .copyDirectory('./node_modules/bootstrap/dist/fonts', './assets/fonts')
   .copyDirectory('./node_modules/summernote/dist/font', './assets/css/font');


    