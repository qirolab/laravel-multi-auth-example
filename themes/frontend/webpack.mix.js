const mix = require("laravel-mix");

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
 
 
mix.setPublicPath("public/themes/frontend")
    .js(`${__dirname}/js/app.js`, "js")
    .sass(`${__dirname}/sass/app.scss`, "css");