<?php

class PessoaController 
{

    public static function index() 
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modules/Pessoa/ListaPessoas.php';
    }

    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function save() {

        include 'Model/PessoaModel.php';

        $PRODUTOS = new PessoaModel();
        $PRODUTOS -> nome = $_POST['NOME'];
        $PRODUTOS -> CODIGO = $_POST['CODIGO'];
        $PRODUTOS -> PRECO = $_POST['PRECO'];
        $PRODUTOS -> VALIDADE = $_POST['VALIDADE'];
        $PRODUTOS -> FABRICACAO = $_POST['FABRICACAO'];
        $PRODUTOS -> LOTE = $_POST['LOTE'];

        $PRODUTOS -> save();

        header("Location: /PRODUTOS");
    }
}