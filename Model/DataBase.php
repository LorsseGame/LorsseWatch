<?php
class Database
{

    protected $PDO;

    public function __construct()
    {
        try {
            $this->PDO  = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, LOGIN, PASSWORD);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
}
