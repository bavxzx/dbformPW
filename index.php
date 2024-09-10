<?php  

    require "conexao.php";

    $user = $_POST["user"];

    $sql = "insert into users (user) values ('$user')";

    if(mysqli_query(DatabaseConector(), $sql)){
        echo "sucesso";
    }else{
        echo "erro";
    }
?>
