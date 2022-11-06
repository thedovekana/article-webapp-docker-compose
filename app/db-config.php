<?php
const DB_DSN = 'mysql:host=localhost;dbname=test';
const DB_USER = "test";
const DB_PASS = "test";
$options = array(
    1002 => "SET NAMES 'utf8'", // encodage utf-8
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // faire des vrais requêtes préparées et non une émulation
);
