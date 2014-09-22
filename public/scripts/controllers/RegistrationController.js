'use strict';

dossierApp.controller('RegistrationController', ['$scope', '$rootScope', function($scope, $rootScope) {
	$scope.registration = {firstName: '', lastName: '', email: '', password: '', passwordConfirm: ''};

	$scope.register = function() {
		// process the values from the form here and pass them to the API/Service to register the user
		// successful registration should show confirmation page, failed registration should show failed
		// registration page...
	};
}]);
