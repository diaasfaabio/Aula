<?php
require_once 'verificar-login.php';
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Materia.php';
    $categoria = new Materia();
    $categoria->excluir($id_excluir);
    header('Location:materia.php');
    ?>
