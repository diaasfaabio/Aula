<?php require_once 'cabecalho.php';
require_once 'verificar-login.php';?>
<div align = "center">
<h2>Adicionar novos professores</h2>
</div>
<br><br>

<form name="nova-categoria" method="post" action="professor-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input maxlength="80" class="form-control" placeholder="Digite seu nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="nome">E-mail</label>
                <input maxlength="80" class="form-control" placeholder="Digite seu E-mail" name="email" required>
            </div>
            <div class="form-group">
                <label for="nome">Telefone</label>
                <input maxlength="80" class="form-control" placeholder="Digite seu telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="nome">Facebook</label>
                <input maxlength="80" class="form-control" placeholder="Digite seu facebook" name="facebook" required>
            </div>
            <div class="form-group">
                <label for="nome">Nascimento</label>
                <input maxlength="80" class="form-control" placeholder="Digite sua data de nascimento" name="nascimento" required>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
