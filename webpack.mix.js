let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css');

mix.js('vendor/components/jquery/jquery.js', 'public/js');
mix.js('node_modules/slider-pro/dist/js/jquery.sliderPro.min.js', 'public/js');
mix.js('resources/assets/js/bootstrap.js', 'public/js');
mix.copy('node_modules/slider-pro/dist/css/slider-pro.min.css', 'public/css');
