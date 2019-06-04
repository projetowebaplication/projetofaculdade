<?php
session_start();
include_once("conexao.php");

$email=$_POST['email'];
$senha=$_POST['senha'];
$valida="SELECT* FROM cadastro_clientes WHERE email='$email' AND password='$senha'";
$result=$con->query($valida);
if($result->num_rows>0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location:mypage.php');
}
else{
    session_unset();
    session_destroy();
    echo "<script> 
        alert('Login ou senha incorreto');
        window.location.href = 'login.php';
        </script>";
      }
?>