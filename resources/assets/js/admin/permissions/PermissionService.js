module.exports = function ($http, $q) {
  'ngInject';

  this.all = function () {
    return $http.get('/api/permissions');
  };
};
