<?php
session_start();
include_once("conexao.php");
$name=$_POST ["name"];
$email=$_POST ["email"];
$username=$_POST ["username"];
$password=$_POST ["password"];
$confirm=$_POST ["confirm"];
$result_cadastro="INSERT INTO cadastro_clientes(nome,email,username,password,creat)
 Values('$name','$email','$username','$password',NOW())";
$resultado=mysqli_query($con,$result_cadastro);
if($password!=$confirm){
$_SESSION['mensagem']="<p style='color:red;'>As senhas informadas não coincidem.Tentar novamente.<p>";
header("Location: matric.php");
} if (mysqli_insert_id($con)){
    $_SESSION['mensagem']="<p style='color:green;'>Usuário cadastrado com sucesso!<p>";
    header("Location: matric.php");
}else{
    $_SESSION['mensagem']="<p style='color:red;'>Usuário não cadastrado.<p>";
    header("Location: matric.php");
}
?>
$login