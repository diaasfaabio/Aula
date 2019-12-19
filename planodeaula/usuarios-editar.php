<?php
require_once 'verificar-login.php';
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$linha = $categoria->listar1Categoria($id);
?>
<form name="alterar-categoria" action="usuarios-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Plano de aula</title>
  <div align="center">
  <br><br>
  <h2>Alterar usuário</h2>
  </div>
  <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                <input type="hidden" class="form-control" placeholder="id:" name="id" required value="<?php echo $id;?>">
                <br>
                <label for="nome">Login:</label>
                <input maxlength="30" class="form-control" placeholder="Login:" name="login" required value="<?php echo $linha['login'];?>">

                <input type="hidden" maxlength="30" class="form-control" placeholder="senha:" name="senha" required value="<?php echo $linha['senha'];?>">


                <br>
                <label for="nome">Nome:</label>
                <input maxlength="30" class="form-control" placeholder="Nome:" name="nome" required value="<?php echo $linha['nome'];?>">

                <br>
                <label for="nome">Telefone:</label>
                <input maxlength="9" class="form-control" placeholder="Telefone:" name="telefone" required value="<?php echo $linha['telefone'];?>">

                <br>
                <label for="nome">CPF:</label>
                <input maxlength="14" class="form-control" placeholder="CPF:" name="cpf" required value="<?php echo $linha['cpf'];?>">

                <br>
                <label for="nome">Cidade:</label>
                <input maxlength="30" class="form-control" placeholder="Cidade:" name="cidade" required value="<?php echo $linha['cidade'];?>">

                <br>
                <label for="nome">Bairro:</label>
                <input maxlength="30" class="form-control" placeholder="Bairro:" name="bairro" required value="<?php echo $linha['bairro'];?>">

                <br>
                <label for="nome">Rua:</label>
                <input maxlength="30" class="form-control" placeholder="Rua:" name="rua" required value="<?php echo $linha['rua'];?>">

                <br>
                <label for="nome">Número:</label>
                <input maxlength="30" class="form-control" placeholder="Número:" name="numero" required value="<?php echo $linha['numero'];?>">

            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
