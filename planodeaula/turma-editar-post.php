<?php
require_once 'classes\Turma.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
$horario_de_inicio = $_POST['horario_de_inicio'];
$horario_de_fim = $_POST['horario_de_fim'];
$categoria = new Turma();
$categoria->alterar($id, $nome, $periodo, $horario_de_inicio, $horario_de_fim);
header('Location:turma.php');
?>
