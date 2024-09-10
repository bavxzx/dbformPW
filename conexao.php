<?php

    function DatabaseConector(){

        $host = "localhost";
        $dbname = "loja";
        $user = "root";
        $password = "";

  return mysqli_connect($host, $user, $password, $dbname);
}
?>  