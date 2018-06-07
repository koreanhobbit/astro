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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/frontend/knight/js/app.js', 'public/frontend/knight/js')
	.sass('resources/assets/frontend/knight/sass/app.scss', 'public/frontend/knight/css');

mix.copy('resources/assets/frontend/knight/css', 'public/frontend/knight/css')
	.copy('resources/assets/frontend/knight/img', 'public/frontend/knight/img');

