<?php
require_once 'classes\Recurso.php';
$id = $_POST['id'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$categoria1 = new Recurso();
$categoria1->alterar($id, $categoria, $nome);


header('Location:recurso.php');

?>