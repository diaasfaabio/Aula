<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
?>
<div align = "center">
<h2>Adicionar nova matéria</h2>
</div>
<br><br>
<form name="nova-materia" method="post" action="materia-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da matéria</label>
                <input maxlength="30" class="form-control" placeholder="Descrição da matéria" name="nome" required>
                <br>
                <label for="nome">Carga Horaria</label>
                <input maxlength="30" class="form-control" placeholder="Carga horaria" name="carga_horaria" required>
                <br>
                <label for="nome">Ementa</label>
                <input maxlength="30" class="form-control" placeholder="Descrição da Ementa" name="ementa" required>

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
