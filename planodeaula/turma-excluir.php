<?php
require_once 'verificar-login.php';
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Turma.php';
    $categoria = new Turma();
    $categoria->excluir($id_excluir);
    header('Location:turma.php');
    ?>
