<?php
require_once 'verificar-login.php';
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Materia.php';
$categoria = new Materia();
$linha = $categoria->listar1Categoria($id);
?>
<h2>Alterar Matéria</h2>
<form name="alterar-materia" action="materia-editar-post.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Nome:
    <input name="nome" value="<?php echo $linha['nome'];?>">
    Carga horária:
    <input name="carga_horaria" value="<?php echo $linha['carga_horaria'];?>">
    Ementa:
    <input name="ementa" value="<?php echo $linha['ementa'];?>">

    <button type="submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>
