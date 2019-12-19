<?php

class Materia{

    /*atributos*/
    public $id;
    public $carga_horaria;
    public $ementa;
    public $nome;

    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, carga_horaria, ementa, nome FROM tb_materias";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, carga_horaria, ementa, nome FROM tb_materias WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }


    public function inserir($carga_horaria, $ementa, $nome){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_materias(nome, carga_horaria, ementa) VALUES('".$nome."','".$carga_horaria."','".$ementa."')";
        $conexao->exec($query);
    }


    public function alterar($id, $carga_horaria, $ementa, $nome){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "UPDATE tb_materias SET carga_horaria = '".$carga_horaria."', ementa = '".$ementa."', nome = '".$nome."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_materias WHERE id = " . $id;
        $conexao->exec($query);
    }
}
