<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
require_once 'classes\Professor.php';
$categoria= new Professor();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Professores</h2>
<a href="professor-criar.php" class="btn btn-success">ADICIONAR NOVOS PROFESSORES</a>
</div>
<br><br><br><br>
<table class="table">
    <thead>
        <th>id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Facebook</th>
        <th>Nascimento</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['email'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td><?php echo $linha['facebook'];?></td>
            <td><?php echo $linha['nascimento'];?></td>
            <td>
                <a href="professor-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="professor-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
