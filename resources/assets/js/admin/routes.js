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

  var loginRequired = function($q, $location, $auth) {
    var deferred = $q.defer();
    if ($auth.isAuthenticated()) {
      return deferred.resolve();
    }
    return $location.path('/login');
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
        loginRequired: loginRequired,
        user: function(UserService, $auth) {
          return UserService.me().then((data) => {
            return data.data;
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

    .state('app.users', {
      url: '/users?page&name&email&roles',
      controller: require('./users/ListController'),
      controllerAs: 'vm',
      template: require('./users/views/index.html'),
      resolve: {
        users: function(UserService, $stateParams) {
          return UserService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.users.create', {
      url: '/create',
      controller: require('./users/CreateController'),
      controllerAs: 'vm',
      template: require('./users/views/form.html'),
      resolve : {
        roles: function(RoleService) {
          return RoleService.getResources().then(function(data) {
            return data.data.data;
          });
        }
      }
    })

    .state('app.users.edit', {
      url: '/edit/:id',
      controller: require('./users/EditController'),
      controllerAs: 'vm',
      template: require('./users/views/form.html'),
      resolve: {
        data: function(UserService, $stateParams) {
          return UserService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        roles: function(RoleService) {
          return RoleService.getResources().then(function(data) {
            return data.data.data;
          });
        }
      },
    })

    .state('app.roles', {
      url: '/roles?page&name&label&permissions',
      controller: require('./roles/ListController'),
      controllerAs: 'vm',
      template: require('./roles/views/index.html'),
      resolve: {
        roles: function(RoleService, $stateParams) {
          return RoleService.filterResources($stateParams).then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.roles.create', {
      url: '/create',
      controller: require('./roles/CreateController'),
      controllerAs: 'vm',
      template: require('./roles/views/form.html'),
      resolve: {
        permissions: function(PermissionService) {
          return PermissionService.all().then(function(data) {
            return data.data;
          });
        }
      }
    })

    .state('app.roles.edit', {
      url: '/edit/:id',
      controllerAs: 'vm',
      controller: require('./roles/EditController'),
      template: require('./roles/views/form.html'),
      resolve: {
        role: function(RoleService, $stateParams) {
          return RoleService.getResource($stateParams.id).then(function(data) {
            return data.data;
          });
        },
        permissions: function(PermissionService) {
          return PermissionService.all().then(function(data) {
            return data.data;
          });
        }
      }
    });

  $urlRouterProvider.otherwise('/home');
};
