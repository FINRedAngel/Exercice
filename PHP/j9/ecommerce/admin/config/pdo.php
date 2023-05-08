<?php
require_once(__DIR__."/global.php");

$dbName = DB_NAME;
$dbHost = DB_HOST;
$dbUser = DB_USER;
$dbPassword = DB_PASSWORD;

$dsn = "mysql:host=$dbHost;dbname=$dbName";

$pdo = new Pdo($dsn,$dbUser,$dbPassword);