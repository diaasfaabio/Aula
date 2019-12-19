<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
?>
<div align = "center">
<h2>Adicionar novas turmas</h2>
</div>
<br><br>

<form name="nova-categoria" method="post" action="turma-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input maxlength="80" class="form-control" placeholder="Digite seu nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="nome">Periodo</label>
                <input maxlength="80" class="form-control" placeholder="Digite o periodo" name="periodo" required>
            </div>
            <div class="form-group">
                <label for="nome">Hora de inicio</label>
                <input maxlength="5" class="form-control" placeholder="Digite a hora de inicio" name="horario_de_inicio" required>
            </div>
            <div class="form-group">
                <label for="nome">Hora do fim</label>
                <input maxlength="5" class="form-control" placeholder="Digite a hora do termino" name="horario_de_fim" required>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
