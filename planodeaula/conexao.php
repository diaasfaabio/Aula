<?php
define('HOST', '');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'planodeaula');

//Criar a conexao
$conectar = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
