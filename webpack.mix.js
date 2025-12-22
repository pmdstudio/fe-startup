const mix = require("laravel-mix");

mix.disableNotifications();

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css")
    .version();

mix.browserSync("127.0.0.1:8000");
