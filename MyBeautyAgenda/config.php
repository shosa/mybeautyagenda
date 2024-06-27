<?php
// Carica l'autoloader di Composer
require __DIR__ . '/vendor/autoload.php';
define('BASE_PATH', dirname(dirname(__FILE__)) );
// Carica le variabili d'ambiente dal file .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configurazione per la connessione al database
$config = [
    'db_host' => $_ENV['DB_HOST'],
    'db_database' => $_ENV['DB_DATABASE'],
    'db_username' => $_ENV['DB_USERNAME'],
    'db_password' => $_ENV['DB_PASSWORD']
];

// Connessione al database usando PDO
try {
    $pdo = new PDO("mysql:host={$config['db_host']};dbname={$config['db_database']}", $config['db_username'], $config['db_password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connessione al database riuscita!";
} catch (PDOException $e) {
    die("Errore di connessione al database: " . $e->getMessage());
}
