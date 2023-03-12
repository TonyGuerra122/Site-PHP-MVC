<?php
include("Conexao.php");
class Usuarios{
    protected $nome;
    protected $email;
    protected $senha;

    public function __construct($email, $senha)
    {
        $pdo = new Conexao("localhost", "site", "root", "");
        $query_construct = $pdo->getPdo()->prepare("SELECT * FROM site.usuarios WHERE email = ? AND senha = ?");
        $query_construct->bindValue(1, $email, PDO::PARAM_STR);
        $query_construct->bindValue(2, md5($senha), PDO::PARAM_STR);
        $query_construct->execute();

        if($query_construct->rowCount() <= 0){
            return 0;
        }else{
            while($row = $query_construct->fetch()){
                $this->nome = $row['nome'];
                $this->email = $row['email'];
                $this->senha = $row['senha'];
            }
            return $query_construct->rowCount();
        }
    }
}