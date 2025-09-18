<<<<<<< HEAD
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
mix.js(__dirname + '/resources/assets/js/app.js', 'js/job.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/job.css');
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/xot.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/xot.css');
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

if (mix.inProduction()) {
    mix.version();
}
