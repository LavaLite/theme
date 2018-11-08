const { mix } = require('laravel-mix');

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

mix    

    // Commonly used style sheets.
    .styles([
        './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
        './vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.css',
        './vendor/bower_components/datatables.net-responsive/css/dataTables.bootstrap.css',
        './vendor/bower_components/datatables.net-responsive-bs/css/responsive.bootstrap.css',
        './vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css'
        './vendor/bower_components/dropzone/dist/dropzone.css',
        './vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
        './vendor/bower_components/font-awesome/css/font-awesome.min.css',
        './vendor/bower_components/ionicons/css/ionicons.min.css',
        './vendor/bower_components/selectize/dist/css/selectize.bootstrap3.css',
        './vendor/bower_components/simple-line-icons/css/simple-line-icons.css',
        './vendor/bower_components/summernote/dist/summernote.css',
        './vendor/bower_components/sweetalert/dist/sweetalert.css',
        './vendor/bower_components/toastr/toastr.min.css',
        './vendor/bower_components/waves/dist/waves.css',
        ], './public/css/vendor.css')
    .scripts([
        // Commonly used js.
        './vendor/bower_components/bootstrap/dist/js/bootstrap.js',
        './vendor/bower_components/jquery-ui/jquery-ui.js',
        './vendor/bower_components/datatables.net/js/jquery.dataTables.js',
        './vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.js',
        './vendor/bower_components/datatables.net-responsive/js/dataTables.responsive.js',
        './vendor/bower_components/datatables.net-responsive-bs/js/responsive.bootstrap.js',
        './vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js'
        './vendor/bower_components/dropzone/dist/dropzone.js',
        './vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js',
        './vendor/bower_components/jquery-timeago/jquery.timeago.js',
        './vendor/bower_components/jquery-validation/dist/jquery.validate.js',
        './vendor/bower_components/moment/min/moment.min.js',
        './vendor/bower_components/microplugin/src/microplugin.js',
        './vendor/bower_components/sifter/sifter.js',
        './vendor/bower_components/selectize/dist/js/selectize.js',
        './vendor/bower_components/Sortable/Sortable.min.js',
        './vendor/bower_components/summernote/dist/summernote.js',
        './vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
        './vendor/bower_components/toastr/toastr.js',
        './vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        './vendor/bower_components/waves/dist/waves.js'
    ], './public/js/vendor.js')

    // Copy individual packages
    .copy('./vendor/bower_components/normalize.css/normalize.css', './public/css/normalize.css')
    .copy('./vendor/bower_components/cropper/dist/cropper.css', './public/packages/cropper/css/cropper.css')
    .copy('./vendor/bower_components/cropper/dist/cropper.js', './public/packages/cropper/js/cropper.js')
    .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.css', './public/packages/fullcalendar/fullcalendar.min.css')
    .copy('./vendor/bower_components/fullcalendar/dist/fullcalendar.min.js', './public/packages/fullcalendar/fullcalendar.min.js')
    .copy('./vendor/bower_components/jquery/dist/jquery.min.js', './public/packages/jquery/js/jquery.min.js')
    .copy('./vendor/bower_components/jquery/dist/jquery.min.map', './public/packages/jquery/js/jquery.min.map')
    .copy('./vendor/bower_components/nestable-2/jquery.nestable.css', './public/packages/nestable/jquery.nestable.css')
    .copy('./vendor/bower_components/nestable-2/jquery.nestable.js', './public/packages/nestable/jquery.nestable.js')

    .copyDirectory('./vendor/bower_components/fullcalendar/dist/locale', './public/packages/fullcalendar/dist/locale/')
    .copyDirectory('./vendor/bower_components/jstree/dist', './public/packages/jstree')

    .copyDirectory('./vendor/bower_components/summernote/dist/font', './public/css/font')
    .copyDirectory('./vendor/bower_components/bootstrap/fonts', './public/fonts')
    .copyDirectory('./vendor/bower_components/font-awesome/fonts', './public/fonts')
    .copyDirectory('./vendor/bower_components/ionicons/fonts', './public/fonts')
    .copyDirectory('./vendor/bower_components/simple-line-icons/fonts', './public/fonts')

    ;
    