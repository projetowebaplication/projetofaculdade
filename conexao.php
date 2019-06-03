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
 if ($con->query($del) === TRUE) {
 echo "Registro apagado!<br>";
 } else {
 echo "Erro ao apagar o registro: " . $con->error."<br>";
 }
 
  $up = "UPDATE cadastro_clientes SET username='kari12' WHERE id=56";
 if ($con->query($up) === TRUE) {
 echo "Registro atualizado com sucesso<br>";
 } else {
 echo "Erro na atualização do registro: " . $con->error."<br>";
 }
 $con->close();

?>