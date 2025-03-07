<?php
//Inicia a sessão
session_start(); 
if(isset($_SESSION["adm"])){
    header('Location: index.php');
}
if(isset($_SESSION["user"])){
  header('Location: index.php');
}
//Verifica se os dados foram submetidos pelo formulario
if(isset($_POST["login"]) && isset($_POST["senha"])){
    
    //armazena os valores em variaveis
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    //verifica o login
    if($login == "admin" && $senha == "1234"){
        //armazena o valor "Fulano" na 
        //chave nome da sessão do servidor
        $_SESSION["adm"] = "admin";
        //Redireciona para o index.php
        header("Location: App/views/adm_pages/adm_home.php");
    };
    if($login == "fulano" && $senha == "senhaforte"){
      //armazena o valor "Fulano" na 
      //chave nome da sessão do servidor
      $_SESSION["user"] = "usuario";
      //Redireciona para o index.php
      header("Location:App/views/user_pages/user_home.php ");
  };
 
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cipela/Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-sm-12">
              <div class="card shadow p-5">
                <h1 class="mx-auto mb-4 fw-semibold">Bem vindo(a)</h1>
                <form action="" method="post">
                  <!-- Input Login -->
                  <div class="form-floating mb-3">
                    <input name="login" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nome do usuário</label>
                  </div>
                  <!-- Input Senha -->
                  <div class="form-floating">
                    <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                  </div>
                  <!-- Botão Entrar -->
                  <div class="d-grid my-3 mx-1">
                    <button class="btn btn-primary btn-lg" type="submit">
                      Entrar
                    </button>
                  </div>
                </form>
                
                </div>
              </div>
            </div><!-- fim da coluna -->
        </div><!-- fim da row -->
    </div><!-- fim do container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>