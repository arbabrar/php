<?php
//print_r($_SERVER);
//die;
$server_ip = $_SERVER['SERVER_ADDR'] ?? '';

// El nombre del host del servidor
$server_host = $_SERVER['SERVER_NAME'] ?? '';

// El software del servidor
$server_software = $_SERVER['SERVER_SOFTWARE'] ?? '';

// El agente de usuario del cliente
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// La dirección IP del cliente
$client_ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Mostrar la información
echo "Dirección IP del servidor: $server_ip <br>";
echo "Nombre del host del servidor: $server_host <br>";
echo "Software del servidor: $server_software <br>";
echo "Agente de usuario (User Agent): $user_agent <br>";
echo "Dirección IP del cliente: $client_ip <br>";
?>