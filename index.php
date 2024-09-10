<?php  

    require "conexao.php";

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];


    $sql = "insert into loja (nome, endereco, cidade, estado) values ('$nome', '$endereco', '$cidade', '$estado')";
    

    if(mysqli_query(DatabaseConector(), $sql)){
        echo "sucesso";
    }else{
        echo "erro";
    }
?>
