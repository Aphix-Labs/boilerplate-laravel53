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
				return UserService.get().then((data) => {
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

	$urlRouterProvider.otherwise('/home');
};
