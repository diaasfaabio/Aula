<?php
require_once 'verificar-login.php';
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Professor.php';
$categoria = new Professor();
$linha = $categoria->listar1Categoria($id);
?>
<h2>Alterar Categoria</h2>
<form name="alterar-categoria" action="professor-editar-post.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Descrição:
    <input name="nome" value="<?php echo $linha['nome'];?>">
    <input name="email" value="<?php echo $linha['email'];?>">
    <input name="telefone" value="<?php echo $linha['telefone'];?>">
    <input name="facebook" value="<?php echo $linha['facebook'];?>">
    <input name="nascimento" value="<?php echo $linha['nascimento'];?>">

    <button type="submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>
