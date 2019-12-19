<?php

/*nome da classe*/
class Usuarios{

    /*atributos*/
    public $id;
    public $tipo;
    public $login;
    public $senha;
    public $nome;
    public $telefone;
    public $cpf;
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;
    public $data;


    /* métodos */
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, tipo, login, nome, telefone, cpf, cidade, bairro, rua, numero, data FROM tb_usuarios";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "SELECT id, tipo, login, senha, nome, telefone, cpf, cidade, bairro, rua, numero, data FROM tb_usuarios WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($tipo, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query="INSERT INTO tb_usuarios(tipo, login, senha, nome, telefone, cpf, cidade, bairro, rua, numero, data) VALUES('".$tipo."','".$login."','".$senha."','".$nome."','".$telefone."','".$cpf."',
        '".$cidade."','".$bairro."','".$rua."','".$numero."', NOW())";

        $conexao->exec($query);
    }

    public function alterar($id, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");
        $query = "UPDATE tb_usuarios SET login = '".$login."' ,senha = '".$senha."' ,nome = '".$nome."' ,telefone = '".$telefone."', cpf = '".$cpf."',cidade = '".$cidade."', bairro = '".$bairro."',rua = '".$rua."'
        ,numero = '".$numero."' WHERE id = " . $id;



        $conexao->exec($query);

    }
    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=planodeaula","root","");

        $query = "DELETE FROM tb_usuarios WHERE id = " . $id;
        $conexao->exec($query);
    }
}
