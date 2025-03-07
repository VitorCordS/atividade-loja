<?php
error_reporting(0);
//store -> inserir (guarda)
//edit -> alterar
//delete -> excluir
//show -> mostrar um produto
//index -> mostrar todos os produtos

//Importando a conexão com o banco de dados
require_once('connection.php');


//Função que insere um produto no banco de dados

function save($nome, $descricao, $foto, $preco){

    //Obtendo uma conexão com o banco de dados
    $conn = getConnection();

   // global $conn; // pra função enxergar a variavel global 

   //criando um comando sql 
        $sql = "INSERT INTO produtos (nome, descricao, foto, preco)
        VALUES ('$nome', '$descricao', '$foto', $preco)"; //preco não tem aspas simples pq não é varchar

    //executando o comando
        if ($conn->query($sql) === TRUE) {
         echo "<script>alert('Produto adicionado com sucesso')</script>";
        } else {
        echo "Erro: " . $sql . "<br>" . $conn->error; //mostra o comando q ele recebeu e o erro que deu pra poder resolver
        }

    //Fechando a conexão
    $conn->close();

}//fim do save


function all(){
    $conn = getConnection();

    $sql = "SELECT * FROM produtos";

    $produtos = $conn->query($sql);

    $conn->close();

    return $produtos;
}

function del($id){
    $conn = getConnection();
    
    $sql = "DELETE FROM produtos WHERE id= $id";
   
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produto excluido com sucesso')</script>";
        header("Refresh: 0");
    } else {
        echo "Error deleting record: " . $conn->error;
    };
$conn->close();

}

function edit($nome, $descricao, $foto, $preco, $id){

    //Obtendo uma conexão com o banco de dados
    $conn = getConnection();

   // global $conn; // pra função enxergar a variavel global 

   //criando um comando sql 
        $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', foto = '$foto', preco = $preco WHERE id=$id";
        //preco não tem aspas simples pq não é varchar

    //executando o comando
        if ($conn->query($sql) === TRUE) {
         echo "<script>alert('Produto editado com sucesso')</script>";
        } else {
        echo "Erro: " . $sql . "<br>" . $conn->error; //mostra o comando q ele recebeu e o erro que deu pra poder resolver
        }

    //Fechando a conexão
    $conn->close();
};