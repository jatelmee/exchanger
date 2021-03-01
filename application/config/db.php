<?php

$config =  [
	'host' => 'localhost',
	'name' => 'samurai113_tech',
	'user' => 'samurai113_tech',
	'password' => '*KZM3a&w',
];


list('host' => $host,  'name' => $name, 'user' => $user, 'password' => $password) = $config;

$dsn = "mysql:host==$host;dbname=$name;user=$user;password=$password";

return $dsn;
