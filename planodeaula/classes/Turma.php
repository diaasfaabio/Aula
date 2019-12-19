<?php

class Turma{

    /*atributos*/
    public $id;
    public $nome;
    public $periodo;
    public $horario_de_inicio;
    public $horario_de_fim;

    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "SELECT id, nome, periodo, horario_de_inicio, horario_de_fim FROM tb_turmas";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, nome, periodo, horario_de_inicio, horario_de_fim FROM tb_turmas WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome, $periodo, $horario_de_inicio, $horario_de_fim){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_turmas(nome, periodo, horario_de_inicio, horario_de_fim) VALUES('".$nome."','".$periodo."','".$horario_de_inicio."','".$horario_de_fim."')";

        $conexao->exec($query);

    }

    public function alterar($id, $nome, $periodo, $horario_de_inicio, $horario_de_fim){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "UPDATE tb_turmas SET nome = '".$nome."',periodo = '".$periodo."',horario_de_inicio = '".$horario_de_inicio."',horario_de_fim = '".$horario_de_fim."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_turmas WHERE id = " . $id;
        $conexao->exec($query);
    }
}
