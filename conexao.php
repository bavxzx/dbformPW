<?php

    function DatabaseConector(){

        $host = "localhost";
        $dbname = "dbform";
        $user = "root";
        $password = "";

  return mysqli_connect($host, $user, $password, $dbname);
}
?>  