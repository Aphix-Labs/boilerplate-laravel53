module.exports = function($state, $auth, toastr) {
	if (!$auth.isAuthenticated()) {
		return;
	}

	$auth.logout().then(() => {
		toastr.info('Ha sido cerrada tu sesión');
		$state.go('home');
	});
};
