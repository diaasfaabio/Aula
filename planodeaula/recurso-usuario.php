<?php require_once 'cabecalho-usuario.php';
require_once 'verificar-login.php';
require_once 'classes\Recurso.php';
$categoria= new Recurso();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Recursos</h2>

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
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
