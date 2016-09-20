const elixir = require('laravel-elixir');

elixir(mix => {

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

  mix.sass([
    'admin.scss',
    './node_modules/angular-toastr/dist/angular-toastr.min.css',
    './node_modules/angular-loading-bar/build/loading-bar.min.css'
  ], 'public/css/admin.css')

  mix.webpack('/admin/app.js', 'public/js/admin.js')

  mix.version([
    'css/admin.css',
    'js/admin.js',
  ])
});
