<?php require_once 'cabecalho.php'
require_once 'verificar-login.php';?>
<h2>Produtos</h2>
<a href="produtos-criar.php" class="btn btn-info">Criar Novo Produto</a>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Categoria</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>O Senhor dos Aneis</td>
            <td>R$ 80,55</td>
            <td>2</td>
            <td>Livros</td>
            <td><a href="produtos-editar.php" class="btn btn-info">Editar</a></td>
            <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
    </tbody>
</table>
<?php require_once 'rodape.php' ?>
