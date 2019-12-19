<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
require_once 'classes\Materia.php';
$categoria= new Materia();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Matéria</h2>
<a href="materia-criar.php" class="btn btn-success">ADICIONAR NOVAS MATÉRIAS</a>
</div>
<br><br><br><br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Carga horária</th>
        <th>Ementa</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['carga_horaria'];?></td>
            <td><?php echo $linha['ementa'];?></td>

            <td>
                <a href="materia-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="materia-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
