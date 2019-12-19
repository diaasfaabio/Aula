<?php
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Professor.php';
$categoria = new Professor();
$linha = $categoria->listar1Categoria($id);
?>
<h2>Alterar Professor</h2>
<form name="alterar-professor" action="professor-editar-post.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Nome:
    <input name="nome" value="<?php echo $linha['nome'];?>">
    <br>    <br>

    E-mail:
    <input name="email" value="<?php echo $linha['email'];?>">
    <br>    <br>

    Telefone:
    <input name="telefone" value="<?php echo $linha['telefone'];?>">
    <br>    <br>

    Facebook:
    <input name="facebook" value="<?php echo $linha['facebook'];?>">
    <br>    <br>

    Nascimento:
    <input name="nascimento" value="<?php echo $linha['nascimento'];?>">
    <br>    <br>
    
    <button type="submit">Salvar</button>
   

</form>
<?php
require_once 'rodape.php';
?>
