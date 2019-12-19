<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
require_once 'classes\Recurso.php';
$categoria= new Recurso();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Recursos</h2>
<a href="recurso-criar.php" class="btn btn-success">ADICIONAR RECURSOS</a>
</div>
<br><br><br><br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
                        <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['categoria'];?></td>

            <td>
                <a href="recurso-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="recurso-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
