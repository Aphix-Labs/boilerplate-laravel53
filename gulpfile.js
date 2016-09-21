const elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

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
    './node_modules/angular-loading-bar/build/loading-bar.min.css',
  ], './resources/assets/temp/css/admin.css')

  mix.styles([
    '../temp/css/admin.css',
    '../sass/vendor/smartadmin-production-plugins.min.css',
    '../sass/vendor/smartadmin-production.min.css',
    '../sass/vendor/smartadmin-skins.min.css',
  ], 'public/css/admin.css')

  mix.webpack('/admin/app.js', 'public/js/admin.js')

  // if (elixir.config.production) {
    mix.version([
      'css/admin.css',
      'js/admin.js',
    ])
  // }
});
