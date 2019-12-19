<?php
require_once 'classes\Categoria.php';
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$categoria = new Categoria();
$categoria->alterar($id, $descricao);
header('Location:categorias.php');
?>
