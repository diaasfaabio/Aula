<?php
require_once 'verificar-login.php';
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Professor.php';
    $categoria = new Professor();
    $categoria->excluir($id_excluir);
    header('Location:professor.php');
    ?>
