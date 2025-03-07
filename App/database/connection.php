<!--- Conexão com o Banco de Dados 

todas as operações que fazemos no projeto tá aí
operações: CRUD
se tivesse outras tabelas seria legal separar os arquivos aqui

https://www.w3schools.com/php/php_mysql_connect.asp
-->

<?php
  function getConnection(){ //colocou numa função pra o povo não poder ter acesso livre
    //Credenciais de acesso
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loja"; //em qual banco de dados eu devo me conectar?


    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname); //conecte-se ao mysql utilizando este user, esta senha...

    // Verificando a conexão
    if ($conn->connect_error) {
      die("Erro de conexao: " . $conn->connect_error);
    }

    //Retorna a conexão com o banco de dados
    return $conn;
  
    //echo "Conectado com sucesso!"; ---> anterior que foi excluído


  }//fim do getConnection
?>
