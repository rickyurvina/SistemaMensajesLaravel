const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// mix.js([
//     'resources/js/autosize.min.js',
//     'resources/js/bootstrap.bundle.min.js',
//     'resources/js/bootstrap.js',
//     'resources/js/bootstrap.min.js',
//     'resources/js/bootstrap-colorpicker.min.js',
//     'resources/js/bootstrap-datetimepicker.min.js',
//     'resources/js/bootstrap-progressbar.min.js',
//     'resources/js/bootstrap-wysiwyg.min.js',
//     'resources/js/buttons.bootstrap.min.js',
//     'resources/js/jquery.min.js',
//     'resources/js/fastclick.js',
//     'resources/js/nprogress.js',
//     'resources/js/Chart.min.js',
//     'resources/js/gauge.min.js',
//     'resources/js/icheck.min.js',
//     'resources/js/skycons.js',
//     'resources/js/jquery.flot.js',
//     'resources/js/jquery.flot.orderBars.js',
//     'resources/js/jquery.flot.pie.js',
//     'resources/js/jquery.flot.resize.js',
//     'resources/js/jquery.flot.spline.min.js',
//     'resources/js/jquery.flot.stack.js',
//     'resources/js/jquery.flot.time.js',
//     'resources/js/curvedLines.js',
//     'resources/js/date.js',
//     'resources/js/jquery.vmap.js',
//     'resources/js/jquery.vmap.world.js',
//     'resources/js/jquery.vmap.sampledata.js',
//     'resources/js/moment.min.js',
//     'resources/js/daterangepicker.js'
// ],'public/js/app4.js').exctract(['mi_modulo']);

mix.browserSync('http://127.0.0.1:8000/')


