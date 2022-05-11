<?php
include_once("db.php");

$comment = $_POST['comment'];
$email = $_COOKIE['auth_token'];
$buscarid = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($buscarid);
if($result->num_rows){
    while($user = $result->fetch_object()){
        $id = $user->id;
        $username = $user->name;
        $sql = "INSERT INTO comments (id_user, username, comment) VALUES ('$id','$username','$comment')";
        if($conn->query($sql)=== TRUE){
            echo "Sucessoooooo";
            header("Location: dash.php");
        }else{
            echo "erro ao comentar";
            header("Location: dash.php");
        }
    }
}else{
    echo "erro";
    header("Location: dash.php");
};


// $sql = "INSERT INTO comments (id_user, comment) VALUES ('$name','$email')";
// if($conn->query($sql)=== TRUE){
//     $_SESSION['msg'] = "Comentario Salvo com sucesso";
//     header("Location: dash.php");
// }else{
//     $_SESSION['msg'] = "Error em comentar";
//     header("Location: dash.php");
// }

?>