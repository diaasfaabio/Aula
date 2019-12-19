<?php
require_once 'classes/Professor.php';
$categoria = new Professor();
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$facebook = $_POST['facebook'];
$nascimento = $_POST['nascimento'];
$categoria->inserir($nome, $email, $telefone, $facebook, $nascimento);
header('Location:professor.php');
?>
