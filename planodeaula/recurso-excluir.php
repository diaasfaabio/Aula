<?php
require_once 'verificar-login.php';
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Recurso.php';
    $categoria = new Recurso();
    $categoria->excluir($id_excluir);
    header('Location:recurso.php');
    ?>
