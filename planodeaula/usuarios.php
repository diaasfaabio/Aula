<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
require_once 'classes\Usuarios.php';
$categoria= new Usuarios();
$lista = $categoria->listar();
?>
<?php require_once 'cabecalho.php' ?>
<DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  <head>
      <meta charset='utf-8'>
      <title>Usuários</title>
      <div align = "center">
      <h2>Lista de usuários</h2>
      <a href="usuarios-criar.php" class="btn btn-success">ADICIONAR NOVOS ADMINISTRADOR</a>
      </div>
      <br><br><br><br>
</div>
<br><br>
<table class="table">
    <thead>
        <th>Id:</th>
        <th>tipo:</th>
        <th>Login:</th>
        <th>Nome:</th>
        <th>Telefone:</th>
        <th>Cpf:</th>
        <th>Cidade:</th>
        <th>Bairro:</th>
        <th>Rua:</th>
        <th>Número:</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['tipo'];?></td>
            <td><?php echo $linha['login'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td><?php echo $linha['cidade'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['rua'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td>
                <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="usuarios-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
