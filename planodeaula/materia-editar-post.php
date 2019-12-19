<?php
require_once 'classes\Materia.php';
$id = $_POST['id'];
$carga_horaria = $_POST['carga_horaria'];
$ementa = $_POST['ementa'];
$nome = $_POST['nome'];
$categoria = new Materia();
$categoria->alterar($id, $carga_horaria, $ementa, $nome);
header('Location:materia.php');
?>
