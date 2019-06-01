<?php
include_once("conexao.php");
$name=$_POST ["name"];
$email=$_POST ["email"];
$username=$_POST ["username"];
$password=$_POST ["password"];
$confirm=$_POST ["confirm"];

$result_cadastro="INSERT INTO cadastro_clientes(nome,email,username,password,creat)
 Values('$name','$email','$username','$password',NOW())";
$resultado_cadastro= mysqli_query($con,$result_cadastro);
if($con->query($result_cadastro)===TRUE){
    header("Location: matric.php");
}
else{
    header("Location: matric.php");
}
?>