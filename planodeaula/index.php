<?php
require_once 'cabecalho_normal.php'
?>
<script src="assets/js/personalizado.js"></script>
<DOCTYPE html>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<html>
  <head>
      <meta charset='utf-8'>
      <title>Login</title>
<div class="row">
    <div class="col-md-12">
      <div align="center">
  <br><br><br><br><br><br><br><br>
<h1>ÁREA DE LOGIN</h1><br>
<form action="login.php" method="POST">
  <input class="tb5" name="login" type="text" placeholder=" Login:" required>
    <br><br>
      <input class="tb5" name="senha" type="password" placeholder=" Senha:" required>
        <br><br>
      <input type="submit" value="ENTRAR" class="btn btn-info"> <br>
</form>
    <br>


<form action="criar-usuario.php" method="POST">
      <input type="submit" value="CADASTRAR" class="btn btn-danger">

</form>
<br><br><br><br><br><br><br><br>


</div>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php ?>
