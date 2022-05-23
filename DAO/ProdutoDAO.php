<?php

class ProdutoDAO
{

    private $conexao;

    function __construct() 
    {

        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(ProdutoModel $model) 
    {

        $sql = "INSERT INTO PRODUTOS 
                (NOME, CODIGO, PRECO, VALIDADE, FABRICACAO, LOTE) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this -> conexao -> prepare($sql);

        $stmt -> bindValue(1, $model -> NOME);
        $stmt -> bindValue(2, $model -> CODIGO);
        $stmt -> bindValue(3, $model -> PRECO);
        $stmt -> bindValue(4, $model -> VALIDADE);
        $stmt -> bindValue(5, $model -> FABRICACAO);
        $stmt -> bindValue(6, $model -> LOTE);

        $stmt->execute();      
    }

    public function getAllRows()
    {

        $sql = "SELECT ID, NOME, CODIGO FROM PRODUTOS";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(); 
    }
}