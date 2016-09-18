const elixir = require('laravel-elixir');

elixir(mix => {
  mix.sass([
    'app.scss',
    './node_modules/angular-toastr/dist/angular-toastr.min.css',
    './node_modules/angular-loading-bar/build/loading-bar.min.css'
  ])

  elixir.webpack.mergeConfig({
    module: {
      loaders: [{
        test: /\.html$/,
        loader: 'html'
      }, {
        test: /\.js$/,
        loaders: ['ng-annotate']
      }]
    }
  })

  mix.webpack('app.js');
});
