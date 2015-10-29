var elixir = require('laravel-elixir');

require('laravel-elixir-imagemin');
require('laravel-elixir-replace');

elixir(function(mix) {
    // CSS
    mix.sass('app.scss', false, { includePaths: [ './bower_components/' ]});

    // JS
    mix.scripts([
        '../../../bower_components/jquery/dist/jquery.js',
        '../../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
        'app.js'
    ]);

    // Copy fonts
    mix.copy([
        './bower_components/bootstrap-sass/assets/fonts/bootstrap',
        './bower_components/font-awesome/fonts'
    ], 'public/fonts');

    // Optimize images
    mix.imagemin();

    // Replace strings
    var replacements = [
        ['fonts/', '../fonts/'],
        ['images/', '../images/']
    ];
    mix.replace('public/css/app.css', replacements);

    // Version
    mix.version(['css/app.css', 'js/all.js']);
});
