module.exports = function ($auth, $http, $state) {
  var vm = this;
  vm.user = {};
  vm.errors = {};

  vm.login = () => {
    $auth.login(vm.user)
      .then((response) => {
        $state.go('home');
      })
      .catch((response) => {
        vm.errors = response.data;
      });
  }

  this.hasError = (property) => {
    return vm.errors.hasOwnProperty(property) ? true : false;
  };

};
