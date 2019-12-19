<?php require_once 'cabecalho-usuario.php';
require_once 'verificar-login.php';
require_once 'classes\Turma.php';
$categoria= new Turma();
$lista = $categoria->listar();
?>
<div align = "center">
<h2>Turmas</h2>

</div>
<br><br><br><br>
<table class="table">
    <thead>
        <th>id</th>
        <th>Nome</th>
        <th>Periodo</th>
        <th>Hora de inicio</th>
        <th>Hora do fim</th>

    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['periodo'];?></td>
            <td><?php echo $linha['horario_de_inicio'];?></td>
            <td><?php echo $linha['horario_de_inicio'];?></td>
            <td>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php'; ?>
