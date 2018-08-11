let mix = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
		'jquery/dist/jquery.js',
		'bootstrap/dist/js/bootstrap.js'
	],'public/js/all.js','node_modules');