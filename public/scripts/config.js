dossierApp.config(['$routeProvider', '$locationProvider', '$httpProvider', '$resourceProvider', function($routeProvider, $locationProvider, $httpProvier, $resouceProvider) {
	$routeProvider.when('/', {templateUrl: 'partials/home.html', controller: 'HomeController'});
}]);
