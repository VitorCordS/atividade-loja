<?php
error_reporting(0);
    if(isset($_POST['op'])){

        //Importando o produto.php
        require_once('../../database/produto.php');

        //Obtendo os dados do formulario
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $foto = $_POST['foto'];
        $preco = $_POST['preco'];

        //realizando o INSERT
        save($nome, $descricao, $foto, $preco);
    }//fim do if

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-info ">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="https://i.postimg.cc/mDdNcVHJ/imagem-2023-12-07-182954090.png" alt="Logo" width="30" height="29" class="d-inline-block align-text-top">
      Cipela
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="adm_home.php">Principal</a>
        <a class="nav-link" href="form_produto.php">Cadastrar Novo Produto</a>
        <a class="nav-link" href="list_produto.php">Produtos Cadastrados</a>
      </div>
      <div class="position-absolute top-50 end-0 translate-middle-y p-5">
      <a class="nav-link " href='../../../logout.php'>Sair</a>
      </div>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="card m-5 p-4 shadow">

        <h1>Cadastro de Produto:</h1>

            <form action="" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome"
                        class="form-control">

                <label for="foto">Foto</label>
                <input type="text" name="foto" id="foto"
                        class="form-control">

                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco"
                        class="form-control">

                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao"
                        class="form-control"></textarea>
                <div class="p-4 position-relative ">
                <button type="submit" class="btn btn-primary btn-lg" name="op" value="salvar">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a href="adm_home.php"><button type="button" class="btn btn-dark position-absolute bottom-0 end-0">voltar</button></a>
                </div>
                 <!--se existe op chamado salvar, executa insert--->
            </form> <!--fim do form--->
            </div>
        </div><!--fim do container--->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>