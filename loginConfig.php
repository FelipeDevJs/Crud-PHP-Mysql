<?php
session_start();
include_once("db.php");

$email = $_POST['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
if($result->num_rows){
    while($users = $result->fetch_object()){
        $password = $_POST['pwd'];
        echo "$password";
        echo "$users->password";
        if($password == $users->password){
            header('Location: dash.php');
            setcookie("auth_token", "$email");
        }else{
            $_SESSION['msg'] = "Senha Incorreta";
            header('Location: login.php');
        };
    }
}else{
    $_SESSION['msg'] = "<spam style='color:red';>Email não cadastrado</spam>";
    header('Location: login.php');
};
?>