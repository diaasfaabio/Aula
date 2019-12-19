<?php
require_once 'classes/Categoria.php';
$categoria = new Categoria();
$descricao = $_POST['descricao'];
$categoria->inserir($descricao);
header('Location:categorias.php');
?>