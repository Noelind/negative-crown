const mix = require("laravel-mix");

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

mix.sass("resources/scss/front/custom.scss", "public/css");
mix.sass("resources/scss/admin/admin.scss", "public/css");

// mix.js(
//     ["resources/js/app.js", "resources/js/transition.js"],
//     "public/js"
// ).postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);

mix.js(["resources/js/front/app.js"],"public/js").postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
mix.js(["resources/js/admin/admin.js"],"public/js");

mix.copyDirectory("resources/assets", "public/assets");

mix.browserSync({
    proxy: "127.0.0.1:8000",
    notify: false,
});
