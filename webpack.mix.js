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

mix
    .js('resources/js/app.js', 'public/js').vue({ version: 2 }) // Vue template
    .postCss('resources/css/tailwind.css', 'public/css', [ // Tailwind css loaded
        require("tailwindcss"),
    ])
    .sass('resources/scss/custom.scss', 'public/css'); // Custom Scss file

