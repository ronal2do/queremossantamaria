var elixir = require('laravel-elixir');

elixir(function(mix) {
    
    var npmDir = 'node_modules/',
      	bowerDir = 'bower_components/',
    	jsDir = 'resources/assets/js/',
    	cssDir = 'resources/assets/css/';

    mix.copy(npmDir + 'node-waves/dist/waves.min.js', jsDir);
    mix.copy(npmDir + 'angular/angular.min.js', jsDir);
    mix.copy(bowerDir + 'ngMask/dist/ngMask.min.js', jsDir);
    mix.copy(npmDir + 'node-waves/dist/waves.css', cssDir);
    mix.copy(npmDir + 'sweetalert/dist/sweetalert.min.js', jsDir);
    mix.copy(npmDir + 'sweetalert/dist/sweetalert.css', cssDir);

	mix.scripts([
		'waves.min.js',
		'sweetalert.min.js',
		'angular.min.js',
		'ngMask.min.js',
		'app.js'
	], 'public/assets/js/vendor.js');

	mix.styles([
		'waves.css',
		'sweetalert.css',
		'style.css'
	], 'public/assets/css/vendor.css');

});