<?php
include_once("db.php");

$email = $_COOKIE['auth_token'];

$consuta = "SELECT * FROM comments";
$resultconsuta = $conn->query($consuta);
if($resultconsuta->num_rows){
    while($res = $resultconsuta->fetch_object()){
        $id = $res->id_user;
        $username = $res->username;
        $comment = $res->comment;
        echo "<div class='border-2 border-gray-200 rounded-3xl w-full m-1.5 p-2.5'>
        <div class='flex flex-row items-start'>
            <div class='bg-green-100 w-14 h-14 rounded-full'></div>
                <div class='h-auto m-1.5 flex flex-row'>
                    <p></p>
                    <p class='mx-1.5'>$username</p>
                </div>
            </div>
            <div class=' w-full'>
                <div>
                    <p class='p-2 pl-5'>$comment</p>
                </div>
                <div class=' w-full h-8 flex justify-around items-center'>
                    <p>curti</p>
                    <p>comentar</p>
                    <p>rePostar</p>
                </div>
            </div>
        </div>";
    }
}else{
    echo "<p class='bg-gray-800 p-1.5 text-center text-white rounded-full'>Nenhum comentario encontrado !</p>";
}

?>