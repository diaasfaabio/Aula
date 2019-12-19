<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
require_once 'classes\Categoria.php';
$categoria= new Categoria();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Categorias</h2>
<a href="categorias-criar.php" class="btn btn-success">ADICIONAR CATEGORIA</a>
</div>
<br><br><br><br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Categoria</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['descricao'];?></td>
            <td>
                <a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
