const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
  mix.browserSync({
      proxy: '0.0.0.0:8000',
      file:['app/**/*', 'modulos/*/views/**/*', 'modulos/**/*', 'modulos/**/*', 'public/**/*','public/views/**/**/**', 'resources/views/**/*']
    });
});
