module.exports = function ($http) {
  'ngInject';

  this.me = () => {
    return $http.get('/api/me');
  };
};
