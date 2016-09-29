module.exports = function OnConfig($stateProvider, $locationProvider, $urlRouterProvider) {
  'ngInject';

  /**
    * Helper auth functions
    */
  var skipIfLoggedIn = function($q, $auth, $location) {
    var deferred = $q.defer();
    if ($auth.isAuthenticated()) {
      $location.path('/home');
    } else {
      deferred.resolve();
    }
    return deferred.promise;
  };

  $stateProvider
  // auth
    .state('login', {
      url: '/login',
      controller: require('./auth/LoginController'),
      controllerAs: 'vm',
      template: require('./auth/login.html'),
      resolve: {
        skipIfLoggedIn: skipIfLoggedIn
      }
    })

    .state('logout', {
      url: '/logout',
      controller: require('./auth/LogoutController'),
      template: '<div></div>'
    })

    .state('register', {
      url: '/register',
      controller: require('./auth/RegisterController'),
      controllerAs: 'vm',
      template: require('./auth/register.html'),
      resolve: {
        skipIfLoggedIn: skipIfLoggedIn
      }
    })

  // application
    .state('app', {
      abstract: true,
      template: require('./layout/layout.html'),
      controller: function(user) { this.user = user },
      controllerAs: 'vm',
      resolve: {
        user: function(UserService, $auth, toastr, $state) {
          return UserService.me().then((data) => {
            return data.data;
          }, (error) => {
            $auth.removeToken();
            toastr.error(error.data.error, 'Estado!');
            $state.go('login');
          });
        }
      },
    })

    .state('app.home', {
      url: '/home',
      controller: function($auth) { this.isAuthenticated = $auth.isAuthenticated },
      controllerAs: 'vm',
      template: require('./app/index.html')
    })

    .state('app.dashboard', {
      url: '/dashboard',
      template: require('./app/dashboard.html'),
      data: {
        title: 'dashboard'
      }
    })

  $urlRouterProvider.otherwise('/login');
};
