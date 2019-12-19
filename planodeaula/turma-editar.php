<?php
require_once 'verificar-login.php';
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Turma.php';
$categoria = new Turma();
$linha = $categoria->listar1Categoria($id);
?>
<h2>Alterar Turma</h2>
<form name="alterar-categoria" action="turma-editar-post.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Nome:
    <input name="nome" value="<?php echo $linha['nome'];?>">
    Periodo:
    <input name="periodo" value="<?php echo $linha['periodo'];?>">
    Horario de inicio:
    <input name="horario_de_inicio" value="<?php echo $linha['horario_de_inicio'];?>">
    Horario do termino:
    <input name="horario_de_fim" value="<?php echo $linha['horario_de_fim'];?>">
    <button type="submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>
