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
      controller: function(user, AclService) {
        this.hasRole = AclService.hasRole;
        this.user = user;
        this.notificationsSize = _.size(user.notifications);
        this.unreadNotificationsSize = _.size(_.filter(user.notifications, function(n) {
          return ! n.read_at;
        }));
      },
      controllerAs: 'vm',
      resolve: {
        user: function(UserService, AclService, toastr, $auth, $state) {
          if (window.currentUser) {
            return window.currentUser;
          }
          // attach roles and user
          return UserService.me().then((data) => {
            _.flatMap(_.flatMap(data.data.roles), 'name').forEach(function(rol) {
              AclService.attachRole(rol);
            });
            window.currentUser = data.data;
            return data.data;
          }, (error) => {
            window.currentUser = null;
            $auth.removeToken();
            toastr.error(error.data.error, 'Estado!');
            $state.go('login');
          });
          return window.currentUser;
        }
      }
    })

    .state('app.home', {
      url: '/home',
      controller: function($auth, data) {
        this.isAuthenticated = $auth.isAuthenticated;
        this.data = data;
      },
      controllerAs: 'vm',
      data: {
        title: 'Inicio'
      },
      template: require('./app/index.html'),
      resolve: {
        data: function($http) {
          return [];
          // return $http.get('/api/dashboard').then(function(data) {
          //   return data.data;
          // });
        }
      }
    })

    .state('app.profile', {
      url: '/profile',
      controller: require('./profile/ProfileController'),
      controllerAs: 'vm',
      template: require('./profile/form.html'),
      data: {
        title: 'Perfil'
      }
    })

  $urlRouterProvider.otherwise('/login');
};
