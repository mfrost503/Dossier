'use strict';

dossierApp.controller('LoginController', ['$scope', '$rootScope', function($scope, $rootScope) {
	$scope.credentials = {username: '', password: ''};
	
	$scope.login = function() {
		// pass username and password to a secure endpoint in order to be processed
		// display an error if the login fails, direct them home on successful login
	};
}]);
