module.exports = function OnConfig($stateProvider, $locationProvider, $urlRouterProvider) {
  'ngInject';

  $stateProvider
  // auth
    .state('login', {
      url: '/login',
      controller: require('./auth/LoginController'),
      controllerAs: 'vm',
      template: require('./auth/login.html')
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
      template: require('./auth/register.html')
    })

  // application
    .state('app', {
      abstract: true,
      template: require('./layout/layout.html'),
      controller: function(user) { this.user = user },
      controllerAs: 'vm',
      resolve: {
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
      url: '/users?page&name&roles',
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
    });

  $urlRouterProvider.otherwise('/home');
};
