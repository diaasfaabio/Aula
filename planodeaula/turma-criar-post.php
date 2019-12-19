<?php
require_once 'verificar-login.php';
require_once 'classes/Turma.php';
$categoria = new Turma();
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
$horario_de_inicio = $_POST['horario_de_inicio'];
$horario_de_fim = $_POST['horario_de_fim'];
$categoria->inserir($nome, $periodo, $horario_de_inicio, $horario_de_fim);
header('Location:turma.php');
?>
