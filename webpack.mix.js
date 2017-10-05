let mix = require('laravel-mix');
let path = require('path');

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

mix.disableNotifications();
mix.js('node_modules/vue-admin-paper-dashboard/src/main.js', 'public/js/app.js')
    .sass('node_modules/vue-admin-paper-dashboard/src/assets/sass/paper-dashboard.scss', 'public/css/app.css');
mix.browserSync(process.env.APP_URL);
if (mix.inProduction()) {
    mix.version();
}
mix.webpackConfig({
    resolve: {
        alias: {
            'src': path.resolve(__dirname, 'node_modules/vue-admin-paper-dashboard/src/'),
        }
    }
});
