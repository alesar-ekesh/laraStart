const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
 
 // Add this line to copy Bootstrap JavaScript files
 mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js');