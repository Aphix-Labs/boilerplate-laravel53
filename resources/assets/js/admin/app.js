window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('angular');
require('bootstrap-sass');
require('angular-animate');
require('angular-loading-bar');
require('angular-ui-router');
require('angular-toastr');
require('satellizer');

angular.module('app', [
  'angular-loading-bar',
  'ngAnimate',
  'satellizer',
  'toastr',
  'ui.router',
])
.run(function($rootScope, $log) {
	$rootScope.$on('$stateChangeError',
		function(event, toState, toParams, fromState, fromParams, error) {
			$log.error('error', error);
		});
})
.config(require('./routes.js'))
.config(function($authProvider) {
	$authProvider.loginUrl = '/login';
  $authProvider.signupUrl = '/register';
})
.controller('NavBarController', require('./app/NavBarController'))
.service('UserService', require('./users/UserService'))


