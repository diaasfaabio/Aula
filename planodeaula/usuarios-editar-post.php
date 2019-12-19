<?php
require_once 'classes\Usuarios.php';
$id = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$categoria = new Usuarios();
$categoria->alterar($id, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero);
header('Location:usuarios.php');
?>
