<?php

class Professor{

    /*atributos*/
    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $facebook;
    public $nascimento;

    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, nome, email, telefone, facebook, nascimento FROM tb_professores";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, nome, email, telefone, facebook, nascimento FROM tb_professores WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome, $email, $telefone, $facebook, $nascimento){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_professores(nome, email, telefone, facebook, nascimento) VALUES('".$nome."','".$email."','".$telefone."','".$facebook."','".$nascimento."')";

        $conexao->exec($query);

    }

    public function alterar($id, $nome, $email, $telefone, $facebook, $nascimento){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "UPDATE tb_professores SET nome = '".$nome."',email = '".$email."',telefone = '".$telefone."',facebook = '".$facebook."',nascimento = '".$nascimento."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_professores WHERE id = " . $id;
        $conexao->exec($query);
    }
}
