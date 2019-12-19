<?php
require_once 'classes/Materia.php';
$categoria = new Materia();
$nome = $_POST['nome'];
$carga_horaria = $_POST['carga_horaria'];
$ementa = $_POST['ementa'];
$categoria->inserir($nome, $carga_horaria, $ementa);
header('Location:materia.php');
?>
