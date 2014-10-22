'use strict';

dossierApp.controller('RegistrationController', ['$scope', '$rootScope', 'RegistrationService','$location', function($scope, $rootScope, RegistrationService, $location) {
	$scope.userData = {firstName: '', lastName: '', email: '', password: '', passwordConfirm: ''};
	$scope.password_match_error = false;
	$scope.registration_failed_error = false;
	console.log($scope.registration_failed_error, $scope.password_match_error);
	$scope.register = function() {
		// process the values from the form here and pass them to the API/Service to register the user
		// successful registration should show confirmation page, failed registration should show failed
		// registration page...
		var error = 0;
		if ($scope.userData.firstName === '') {
			error++;
		}
		if ($scope.userData.lastName === '') {
			error++;
		}
		if ($scope.userData.email === '') {
			error++;
		}
		if ($scope.userData.password === '') {
			error++;
		}
		if ($scope.passwordConfirm === '') {
			error++;
		}
		if ($scope.passwordConfirm != $scope.password) {
			$scope.password_match_error = true;	
			return;
		}

		RegistrationService.register($scope.userData, function() {
			$location.path('/login');
		},
		function() {
			$scope.registration_failed_error = true;
		});
	};
}]);
