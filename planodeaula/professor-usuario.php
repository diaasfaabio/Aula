<?php require_once 'cabecalho-usuario.php';
require_once 'verificar-login.php';
require_once 'classes\Professor.php';
$categoria= new Professor();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Professores</h2>
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
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
