const elixir = require('laravel-elixir');

elixir(mix => {
  mix.sass('app.scss')
    .browserify('app.js');
});
