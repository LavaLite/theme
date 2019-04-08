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
   .extract(['bootstrap','toastr','sweetalert','fullcalendar','summernote','dropzone','timeago',
   	'jquery-validation','eonasdan-bootstrap-datetimepicker'])
   .sass('resources/sass/app.scss', 'assets/css');

mix.copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', './assets/webfonts')
   .copyDirectory('./node_modules/summernote/dist/font', './assets/css/font');

    