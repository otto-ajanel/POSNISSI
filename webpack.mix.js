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



mix.styles([
    'resources/css/fontawesome/css/all.css',
    'resources/css/font-awesome.min.css',
    'resources/css/simple-line-icons.min.css',
    'resources/css/style.css',
], 'public/css/style.css')
 .scripts(['resources/views/assets/js/jquery.min.js',
        'resources/views/assets/js/popper.min.js',
        'resources/views/assets/js/bootstrap.min.js',
        'resources/views/assets/js/Chart.min.js',
        'resources/views/assets/js/pace.min.js',
        'resources/views/assets/js/template.js'
    ], 'public/js/index.js')
    .js(['resources/js/app.js'], 'public/js').vue();
