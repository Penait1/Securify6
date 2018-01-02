let mix = require('laravel-mix');

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
// Vendors
mix.styles([
    'node_modules/admin-lte/bootstrap/css/bootstrap.css',
    'node_modules/admin-lte/dist/css/AdminLTE.css',
    'node_modules/admin-lte/dist/css/skins/skin-blue.css',
    'node_modules/select2/dist/css/select2.min.css',
    'resources/assets/css/bootstrap-datetimepicker.min.css',
    'node_modules/admin-lte/plugins/css/dataTables.bootstrap.css',
    'node_modules/admin-lte/plugins/css/jquery.dataTables.css',
    'public/css/admin.css',
    'node_modules/prismjs/themes/prism-coy.css',
    'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.css',
    'node_modules/prismjs/plugins/line-highlight/prism-line-highlight.css',
], 'public/css/vendor.css').version();

mix.scripts([
    'node_modules/admin-lte/plugins/jQuery/jquery-*.min.js',
    'node_modules/admin-lte/plugins/jQueryUI/jquery-ui.min.js',
    'node_modules/admin-lte/bootstrap/js/bootstrap.js',
    'node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
    'node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.min.js',
    'node_modules/admin-lte/js/application.js',
    'node_modules/select2/dist/js/select2.min.js',
    'resources/assets/js/bootstrap-datetimepicker.min.js',
    'node_modules/select2/dist/js/i18n/nl.js',
    'resources/assets/js/admin.js',
    'node_modules/prismjs/prism.js',
    'node_modules/prismjs/plugins/autoloader/prism-autoloader.js',
    'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js',
    'node_modules/prismjs/plugins/line-highlight/prism-line-highlight.js',

], 'public/js/vendor.js').version();

mix.copy('node_modules/admin-lte/bootstrap/fonts', 'public/fonts');
mix.copy('node_modules/prismjs/components', 'public/js/languages');
mix.copy([
    'node_modules/admin-lte/dist/img/boxed-bg.jpg',
], 'public/img');


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/markText.js', 'public/js')
    .less('resources/assets/less/welcome.less', 'public/css')
    .less('resources/assets/less/admin.less', 'public/css')
    .less('resources/assets/less/challenge.less', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'node_modules/admin-lte/bootstrap/css/bootstrap.css',
    'resources/assets/css/stb.css',
    'resources/assets/css/font-awesome.min.css',
    'node_modules/prismjs/themes/prism-coy.css',
    'resources/assets/css/font-awesome.min.css',
    'public/css/welcome.css',
    'public/css/challenge.css',
    'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.css',
    'node_modules/prismjs/plugins/line-highlight/prism-line-highlight.css',
    'resources/assets/css/font-awesome.min.css',
], 'public/css/stb_bundle.css').version();

mix.scripts([
    'node_modules/admin-lte/plugins/jQuery/jquery-*.min.js',
   'node_modules/prismjs/prism.js',
    'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.js',
    'node_modules/prismjs/plugins/line-highlight/prism-line-highlight.js',
    'resources/assets/js/markText.js'
], 'public/js/vendor_stb.js').version();