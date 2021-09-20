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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/homepage.scss', 'public/css')
;

// mix.js('resources/js/app.js', 'public/js/compiled')
//     .js('resources/js/components/category.js', 'public/js/compiled')
//     .js('resources/js/components/general.js', 'public/js/compiled')
//     .js('resources/js/components/admin.js', 'public/js/compiled')
//     .js('resources/js/components/front.js', 'public/js/compiled')
//     .js('resources/js/components/sort.js', 'public/js/compiled')
//     .js('resources/js/components/ads.js', 'public/js/compiled')
//     .sass('resources/css/custom/backoffice.scss', 'public/css/compiled')
//     .sass('resources/css/custom/front.scss', 'public/css/compiled')
//     .sass('resources/sass/app.scss', 'public/css/compiled')
//     .sourceMaps();
