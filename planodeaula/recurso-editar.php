<?php
require_once 'verificar-login.php';
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Recurso.php';
$categoria = new Recurso();
$linha = $categoria->listar1Categoria($id);
?>
<h2>Alterar recurso</h2>
<form name="alterar-recurso" action="recurso-editar-post.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Categoria:
    <input name="categoria" value="<?php echo $linha['categoria'];?>">
    Nome:
    <input name="nome" value="<?php echo $linha['nome'];?>">
    <button type="submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>
