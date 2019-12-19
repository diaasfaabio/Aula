<?php
require_once 'classes/Recurso.php';
$editar = new Recurso();
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$editar->inserir($categoria, $nome);
header('Location:recurso.php');
?>