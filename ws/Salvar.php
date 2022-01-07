<?php
require_once;//require_once; da pagina que vai ta com os objetos, gets e sets e adaptar os campos

    print_r($_GET);

    $novaBebida = new Bebida();
    $novaBebida->setNome($_GET["nome"]);
    $novaBebida->setPreco($_GET["preco"]);
    $novaBebida->setMl($_GET["ml"]);
    $novaBebida->setId($_GET["id"]);

    /*
    $novaBebida
        ->setNome($_GET["nome"])
        ->setPreco($_GET["preco"])
        ->setMl($_GET["ml"]);
*/
    print_r($novaBebida);
    if($novaBebida->getId()==""){
       $novaBebida->salvar();
    }else{
        $novaBebida->editar();
    }
    //$c = new Conexao();
    //$c->getConexao();
    //Conexao::getConexao();
    header("Location: ../");