<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha loja</title>
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
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card shadow-lg">
  <div class="card-body m-3">
    <a href="form_produto.php"><button class="btn btn-primary p-2">Cadastrar Novo Produto</button></a>
    <a href="list_produto.php"><button class="btn btn-info p-2">Produtos Cadastrados</button></a>
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
