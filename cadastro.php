<?php
session_start();
include_once("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];


// echo "nome: $name - Senha: $senha";

$sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email', '$password')";
if($conn->query($sql)=== TRUE){
    $_SESSION['msg'] = "Cadastrado com Sucesso";
    header("Location: login.php");
}else{
    $_SESSION['msg'] = "Error no Cadastro";
    header("Location: index.php");
}

// if(mysqli_insert_id($conn)){
//     $_SESSION['msg'] = "Cadastrado com sucesso";
//     header("Location: index.php");
// }else{
//     $_SESSION['msg'] = "Erro no cadastro";
//     header("Location: index.php");
// };