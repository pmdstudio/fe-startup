const mix = require("laravel-mix");

mix.setPublicPath("public")
    .disableNotifications()
    .sass("resources/scss/app.scss", "assets/css/main.css")
    .copy(
        "node_modules/@fortawesome/fontawesome-free/webfonts",
        "public/assets/webfonts",
    )
    .js("resources/js/app.js", "assets/js/main.js")
    .options({ processCssUrls: false })
    .version();

mix.browserSync("127.0.0.1:8000");
