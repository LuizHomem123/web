<?php 

class ProdutoModel 
{

    public $ID, $CODIGO, $PRECO, $FABRICACAO, $LOTE;
    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        if($this -> id == null)
        {
            $dao -> insert($this);
        } else 
        {    
        }
    }
    
    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this -> rows = $dao -> getAllRows();
    }

}