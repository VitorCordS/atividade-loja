<?php

require_once('../../database/produto.php');

$produtos = all();

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos </title>
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

        <h1>Produtos Cadastrados</h1>
                <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($produtos->num_rows > 0){
            while($produto = $produtos->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$produto["ID"]."</td>";
              echo "<td><img src='".$produto["FOTO"]."' width='200'</td>";
              echo "<td>".$produto["NOME"]."</td>";
              echo "<td>".$produto["PRECO"]."</td>";?>
<td>
              <button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Editar
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                          $id = $_POST['id'];

                          //realizando o INSERT
                          edit($nome, $descricao, $foto, $preco, $id);
                          header("Refresh: 0");
                      };//fim do if
                      ?>
                      <form action="" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome"
                        class="form-control">

                        <label for="nome">ID</label>
                <input type="number" name="id" id="id"
                        class="form-control ">
                <div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
                  Colocar o <strong>ID</strong> correspondente ao item que quer editar
                  Colocar o <strong>ID</strong> errado pode ocasionar uma mudança indesejada
                </div>
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
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-primary" name="op" value="salvar">Enviar</button>
                </div>
            </form> <!--fim do form--->
                    </div>
                  </div>
                </div>
              </div>
              <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modalexclui'>
                Excluir
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modalexclui" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>Excluir</strong></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php
              if(isset($_POST['del'])){

                  //Importando o produto.php
                  require_once('../../database/produto.php');

                  $id = $_POST['id'];

                  //realizando o INSERT
                  del($id);
              };//fim do if
              ?>
              <form action="" method="POST">
                              <label for="nome">Coloque o Id do Produto para excluir </label>
                              <input type="number" name="id" id="id"
                                      class="form-control ">
                              <div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
                                Colocar o <strong>ID</strong> errado pode ocasionar uma exclusão indesejada
                              </div>
                              <button type="submit" class="btn btn-danger" name="del" value="salvar">Excluir</button>
                              </form>
                    </div>
                  </div>
                </div>
              </div> 
</td>
              <?php
              echo "</tr>";
            }
          }else{
            echo "<tr>";
            echo "<td colspan='5' class='text-center' > NENHUM PRODUTO CADASTRADO</td>";
            echo "</tr>";
          }
            ?>
          </tbody>
        </table>
        <div class="p-4 position-relative ">
        <a href="adm_home.php"><button type="button" class="btn btn-dark position-absolute bottom-0 end-0">voltar</button></a>
        </div>
        </div><!--fim do card--->
        </div><!--fim do container--->

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
      })
    </script>
  </body>
</html>

