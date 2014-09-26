<?php

require_once '../../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$clientSecret = $_POST['client_secret'];
$clientId = $_POST['client_id'];
$code = $_POST['code'];
$redirect_uri = $_POST['redirect_uri'];

$body = [
			'client_secret' => $clientSecret,
			'client_id' => $clientId,
			'code' => $code,
			'redirect_uri' => $redirect_uri
		];

$response = $client->post('https://github.com/login/oauth/access_token', ['body' => $body]);

return $response->getBody();
