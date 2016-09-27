window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('./layout/nav.js')
require('angular');
require('bootstrap-sass');
require('angular-animate');
require('angular-loading-bar');
require('angular-sanitize');
require('angular-sweetalert');
require('angular-ui-bootstrap');
require('angular-ui-router');
require('angular-toastr');
require('satellizer');
require('sweetalert');
require('ui-select');

angular.module('app', [
  'angular-loading-bar',
  'ngAnimate',
  'ngSanitize',
  'oitozero.ngSweetAlert',
  'satellizer',
  'toastr',
  'ui.bootstrap',
  'ui.router',
  'ui.select',
])
.run(function($rootScope, $log) {
	$rootScope.$on('$stateChangeError',
		function(event, toState, toParams, fromState, fromParams, error) {
			$log.error('error', error);
		});
})
.config(require('./routes.js'))
.config(function($authProvider, uibPaginationConfig) {
	$authProvider.loginUrl = '/login';
  $authProvider.signupUrl = '/register';
  uibPaginationConfig.previousText = 'Previo';
  uibPaginationConfig.nextText = 'Siguiente';
})
.directive('smartMenu', require('./directives/smartMenu'))
.directive('stateBreadcrumbs', require('./directives/stateBreadcrumbs'))
.directive('ngEnter', require('./directives/NgEnter'))
.filter('isEmpty', require('./filters/IsEmpty'))
.controller('NavBarController', require('./app/NavBarController'))
.service('ApiService', require('./services/ApiService'))
.service('Confirm', require('./services/Confirm'))
.service('UserService', require('./users/UserService'))
.service('RoleService', require('./roles/RoleService'))
.service('PermissionService', require('./permissions/PermissionService'))
