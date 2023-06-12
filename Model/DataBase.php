<?php
class Database
{
    protected $PDO;

    public function __construct()
    {
        try {
            $this->PDO = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, LOGIN, PASSWORD, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
            ));
        } catch (PDOException $ex) {
            // Gérer l'erreur de connexion de manière appropriée, par exemple :
            error_log("Erreur de connexion à la base de données: " . $ex->getMessage());
            // Afficher un message d'erreur générique à l'utilisateur sans révéler d'informations sensibles
            die("Erreur de connexion à la base de données.");
        }
    }
}
