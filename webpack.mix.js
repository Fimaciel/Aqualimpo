const mix = require('laravel-mix');

mix
    .sass('resources/css/app.scss', 'public/css')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js');
