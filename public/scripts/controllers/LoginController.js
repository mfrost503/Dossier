'use strict';

dossierApp.controller('LoginController', ['$scope', '$rootScope', '$location', '$http', function($scope, $rootScope, $location,$http) {
	var queryString = $location.search();
	var clientId = '825e4ea00c36c458ff3a';
	if (typeof queryString.code === 'undefined') {
		var callback = 'http://dossier.dev/login';
		var state = Math.random();
		var url = "https://github.com/login/oauth/authorize?client_id="+clientId+"&redirect_uri="+callback+"&state="+state;
		window.location = url;
	} else {
		var code = queryString.code;
		var clientSecret = '';
		var redirect = 'http://dossier.dev/';
		$http({
			method:'POST',
			url: 'proxy/githubToken.php',
			data: {
				client_id: clientId,
				client_secret: clientSecret,
				code: code,
				redirect_uri: redirect
			},
			headers: {
				'Access-Control-Allow-Origin': '*',
				'Access-Control-Expose-Headers': 'ETag, Link, X-RateLimit-Limit, X-RateLimit-Remaining, X-RateLimit-Reset, X-OAuth-Scopes, X-Accepted-OAuth-Scopes',
				'Access-Control-Allow-Headers': 'Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With',
				'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE',
				'Access-Control-Max-Age': 86400
			}
		})
		.success(function(data, status, headers, config) {
			alert('success ' +data);
		})
		.error(function(data, status, headers, config) {
			alert('error ' + status);
		});
	}		
}]);
