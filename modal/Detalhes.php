<?php

//mandar toda este codigo para a pasta que está com os objetos, gets e sets e adaptar
require_once "Conexao.php";
public function editar(){
        $tabela = "bebidas";
        $parametros = "nome='".$this->nome."', preco=".$this->preco.", ml=".$this->ml."";
        Conexao::update($tabela, $parametros,
        $this->id);
    }

    public function salvar(){
        $tabela = "bebidas";
        $parametros = "nome, preco, ml";
        $valores = "'".$this->nome."', ".
            $this->preco." ,".$this->ml;
        Conexao::insert($tabela, $parametros,
        $valores);
    }

    public static function getPorId($id){
        $tabela = "bebidas";
        $parametros = "id, nome, preco, ml";
        $dados = Conexao::selectById($tabela, $parametros, $id);
        foreach($dados as $d){
            $b = new Bebida();
            $b->id = $d["id"];
            $b->nome = $d["nome"];
            $b->preco = $d["preco"];
            $b->ml = $d["ml"];
            return $b;
        }

        return null;
    }
    public static function listarTodos(){
        $tabela = "bebidas";
        $parametros = "id, nome, preco, ml";
        $dados = Conexao::select($tabela, $parametros);
        $bebidas = [];
        foreach($dados as $d){
            $b = new Bebida();
            $b->id = $d["id"];
            $b->nome = $d["nome"];
            $b->preco = $d["preco"];
            $b->ml = $d["ml"];
            $bebidas[] = $b;
        }

        return $bebidas;
    }
    public static function deletar($id){
        Conexao::delete("bebidas", "$id");
    }

