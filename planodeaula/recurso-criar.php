<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
?>
<div align = "center">
<h2>Adicionar novos recursos</h2>
</div>
<br><br>
<form name="nova-recurso" method="post" action="recurso-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do recurso</label>
                <input maxlength="60" class="form-control" placeholder="Descrição do nome do recurso" name="nome" required>
                <br>
                <label for="nome">Categoria do recurso</label>
                <input maxlength="50" class="form-control" placeholder="Descrição da categoria do recurso" name="categoria" required>

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
