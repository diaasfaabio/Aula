<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';
?>

<div align = "center">
<h2>Criar nova categoria</h2>
</div>
<br><br>

<form name="nova-categoria" method="post" action="categorias-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input maxlength="30" class="form-control" placeholder="Descrição da categoria"
                name="descricao" required>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
