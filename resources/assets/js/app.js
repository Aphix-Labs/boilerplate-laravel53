window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('angular');
require('angular-ui-router');
require('satellizer');

angular.module('app', [
  'ui.router',
  'satellizer',
])
.config(require('./routes.js'))
.config(function($authProvider) {
	$authProvider.loginUrl = '/login';
})
.service('UserService', require('./users/UserService'))


