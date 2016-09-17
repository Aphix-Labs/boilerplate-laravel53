const elixir = require('laravel-elixir');

elixir(mix => {
  mix.sass([
    'app.scss',
    './node_modules/angular-toastr/dist/angular-toastr.min.css',
    './node_modules/angular-loading-bar/build/loading-bar.min.css'
  ])

  mix.browserify('app.js');
});
