module.exports = function($scope, $auth) {

  $scope.isAuthenticated = () => {
    return $auth.isAuthenticated();
  }

};
