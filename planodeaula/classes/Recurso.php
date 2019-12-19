<?php

class Recurso{

    /*atributos*/
    public $id;
    public $categoria;
    public $nome;

    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, categoria, nome FROM tb_recursos";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, categoria, nome FROM tb_recursos WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($categoria, $nome){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_recursos(categoria, nome) VALUES('".$categoria."','".$nome."')";

        $conexao->exec($query);
    }

    public function alterar($id, $categoria, $nome){

        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "UPDATE tb_recursos SET categoria = '".$categoria."', nome = '".$nome."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_recursos WHERE id = " . $id;
        $conexao->exec($query);
    }
}
