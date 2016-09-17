module.exports = function OnConfig($stateProvider, $locationProvider, $urlRouterProvider) {
  'ngInject';

  $stateProvider
  .state('home', {
    url: '/home',
    controller: function($auth) { this.isAuthenticated = $auth.isAuthenticated },
    controllerAs: 'vm',
    template: require('./app/index.html')
  })

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

  .state('dashboard', {
    url: '/dashboard',
    controller: function(user) { this.user = user },
    controllerAs: 'vm',
    template: require('./app/dashboard.html'),
		resolve: {
			user: function(UserService, $auth) {
				return UserService.get().then((data) => {
					return data.data;
				});
			}
		}
  })

	$urlRouterProvider.otherwise('/home');
};
