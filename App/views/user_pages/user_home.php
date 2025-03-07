<?php

require_once('../../database/produto.php');

$produtos = all();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </style>
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
        <a class="nav-link active" aria-current="page" href="user_home.php">Principal</a>
      </div>
      <div class="position-absolute top-50 end-0 translate-middle-y p-5">
      <a class="nav-link " href='../../../logout.php'>Sair</a>
      </div>
    </div>
  </div>
</nav>
<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">
        <h1>Produtos</h1>
            <?php
            if ($produtos->num_rows > 0){
            while($produto = $produtos->fetch_assoc()) {
              echo "<div class='card m-3' style='width: 18rem;'>";
              echo "<img src='".$produto["FOTO"]."' class='card-img-top' alt=".$produto["NOME"].">";
              echo "<div class='card-body'>";
              echo "<h5 class='card-title'>".$produto["NOME"]."</h5>";
              echo "<p class='card-text'>".$produto["DESCRICAO"]."</p>";
              echo "<p class='card-text'>".$produto["PRECO"]."</p>";
              echo "<a class='btn btn-primary'> Comprar </a>";
              echo "</div>";
              echo "</div>";

};}?></div>
    </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
