<?php

class Categoria{

    /*atributos*/
    public $id;
    public $descricao;

    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, descricao FROM tb_categorias";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, descricao FROM tb_categorias WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($descricao){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_categorias(descricao) VALUES('".$descricao."')";

        $conexao->exec($query);
    }

    public function alterar($id, $descricao){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "UPDATE tb_categorias SET descricao = '".$descricao."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_categorias WHERE id = " . $id;
        $conexao->exec($query);
    }
}