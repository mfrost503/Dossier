dossierApp.factory('RegistrationService', ['$rootScope', '$http', function($rootScope, $http) {
	return {
		register: function(userData, successCallback, errorCallback) {
			console.log('hit it baby');
			$http({
				method:'POST',
				url: 'http://api.dossier.dev/register',
				data: {
					firstName: userData.firstName,
					lastName: userData.lastName,
					email: userData.email,
					password:userData.password
				}
			})
			.success(function(data, status, headers, config) {
				successCallback();
			})
			.error(function(data, status, headers, config){
				errorCallback();
			});
		}
	}
}])