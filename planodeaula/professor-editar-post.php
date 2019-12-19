<?php
require_once 'classes\Professor.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$facebook = $_POST['facebook'];
$nascimento = $_POST['nascimento'];
$categoria = new Professor();
$categoria->alterar($id, $nome, $email, $telefone, $facebook, $nascimento);
header('Location:professor.php');
?>
