module.exports = function OnConfig($stateProvider, $locationProvider, $urlRouterProvider) {
  'ngInject';

  $stateProvider
  .state('login', {
    url: '/login',
    controller: require('./auth/LoginController'),
    controllerAs: 'vm',
    template: require('./auth/login.html')
  })

  .state('home', {
    url: '/home',
    controller: function(user) { this.user = user },
    controllerAs: 'vm',
    template: require('./home/index.html'),
		resolve: {
			user: function(UserService, $auth) {
				return UserService.get().then((data) => {
					return data.data;
				});
			}
		}
  })

	$urlRouterProvider.otherwise('/login');
};
