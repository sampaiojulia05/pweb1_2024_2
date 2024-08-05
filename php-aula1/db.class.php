<?php

class db{
private $host = "localhost";
private $user = "root";
private $password = "";
private $port = "3306";
private $dbname = "db_pweb1_2024_1";
  

function conn(){
  try{
    $conn = new PDO(
      "mysql:host=$this->host;port=$this->port;dbname=$this->dbname",
      $this->user,
      $this->password,
      [
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION,  
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      ]
    );
    return $conn;
    
  }catch(PDORException $e){
    ECHO "Erro: " . $e->getMessage();
  }
}

  function insert($dados){
//INSERT INTO aluno(nome,telefone,cpf)
//VALUES('Julia', '49 9988-2233','223.666.000-89');

    $conn = $this->conn();
    $sql = "INSERT INTO aluno(nome,telefone,cpf)";

    $sql .= " VALUES(?,?,?)";

    $st = $conn->prepare($sql);

    $st->execute([$dados['nome'],
                  $dados['telefone'],
                  $dados['cpf']
                ]);
  }

  function all(){
    
    $conn = $this->conn();
    $sql = "SELECT * FROM aluno";

    $st = $conn->prepare($sql);


    $st->execute();

    return $st->fetchAll(PDO::FETCH_CLASS);
  }

}



?>