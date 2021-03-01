<?php

$config =  [
	'host' => 'localhost',
	'port' => '5432',
	'name' => 'exchanger',
	'user' => 'postgres',
	'password' => 'password',
];;


list('host' => $host, 'port' => $port, 'name' => $name, 'user' => $user, 'password' => $password) = $config;

$dsn = "pgsql:host=$host;port=$port;dbname=$name;user=$user;password=$password";

return $dsn;
