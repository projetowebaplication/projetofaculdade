<?php
$servidor="localhost";
$usuario="root";
$senha="";
$nomedb="cadastro";
//criar conexão
$con= mysqli_connect($servidor,$usuario,$senha,$nomedb);
if($con->connect_error===TRUE)
    {die("A conexão falhou".$con->connect_error);}

$del= "DELETE FROM cadastro_clientes WHERE id=46";

  $up = "UPDATE cadastro_clientes SET username='kari12' WHERE id=56";




?>