<?php
class Conexao{
    private $host = "localhost";
    private $dbname = "site";
    private $user = "root";
    private $password = "";

    public function __construct($host, $dbname, $user, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    private function pdo(){
        try{
            $pdo = new PDO("mysql:host=".$this->host.";"."dbname=".$this->dbname, $this->user, $this->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
            return $pdo;
        }catch(PDOException $e){
            die("ERRO: ". $e->getMessage());
        }
    }
    public function getPdo(){
        return $this->pdo();
    }
}