dossierApp.config(['$routeProvider', '$locationProvider', '$httpProvider', '$resourceProvider', function($routeProvider, $locationProvider, $httpProvier, $resouceProvider) {
	$locationProvider.html5Mode(true);
	$routeProvider.when('/', {templateUrl: 'partials/home.html', controller: 'HomeController'});
	$routeProvider.when('/register', {templateUrl: 'partials/register.html', controller: 'RegistrationController'});
}]);
