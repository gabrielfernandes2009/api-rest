<?php

$host = "192.168.10.92";
$usuario = "postgres";
$banco = "lojasegundao";
$senha = "1234";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);