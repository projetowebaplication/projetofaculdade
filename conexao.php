<?php
$servidor="localhost";
$usuario="root";
$senha="";
$nomedb="cadastro";
//criar conexão
$con= mysqli_connect($servidor,$usuario,$senha,$nomedb);
if($con->connect_error===TRUE)
    {die("A conexão falhou".$con->connect_error);}

?>