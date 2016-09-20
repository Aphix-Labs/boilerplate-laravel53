module.exports = function ($http) {
  'ngInject';

  this.get = () => {
    return $http.get('/api/user');
  };

};
