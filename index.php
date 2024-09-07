<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Carregando variaveis de ambiente
 */
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Criando um instancia imutavel do cliente Guzzle 
 * @var GuzzleHttp\Client
 */
$client = new Client([
	'base_uri' 	=> $_ENV['GITHUB_API_URL'],
	'timeout' 	=> 2.0,
	'headers'	=> [
		'Accept' 		=> 'application/json',
		'Content-type' 	=> 'application/json',
		'Authorization' => 'Bearer ' . $_ENV['GITHUB_TOKEN']
	]
]);

/**
 * Testando integração com á API REST do Gravatar
 */
try {
	
	$data = [
		'description' => 'Integração com API Github usando Guzzle'
	];

	$response = $client->patch('repos/walissonaguirra/guzzle-github', $data);

	echo $response->getBody();

} catch (ClientException $e) {
	echo Psr7\Message::toString($e->getRequest());
    echo Psr7\Message::toString($e->getResponse());
}
