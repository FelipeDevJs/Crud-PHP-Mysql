<?php
include_once("db.php");

$email = $_COOKIE['auth_token'];

$consunta = "SELECT * FROM users WHERE email='$email'";

$result = $conn->query($consunta);
if($result->num_rows){
    while($user = $result->fetch_object()){
        $name = $user->name;
        // echo "$name";
        // 
    };
}else{
    echo "deu errado";
};
$buscacomment = "SELECT * FROM comments";
$resbuscacomment = $conn->query($buscacomment);
if($resbuscacomment->num_rows){
    while($comm = $resbuscacomment->fetch_object()){
        $comments = $comm->comment;
        echo "<div class='border-2 border-gray-200 rounded-3xl w-full m-1.5 p-2.5'>
                 <div class='flex flex-row items-start'>
                     <div class='bg-green-100 w-14 h-14'></div>
                         <div class='h-auto m-1.5 flex flex-row'>
                             <p></p>
                             <p class='mx-1.5'>$name</p>
                         </div>
                     </div>
                     <div class=' w-full'>
                         <div>
                             <p class='p-2 pl-5'>$comments</p>
                         </div>
                         <div class=' w-full h-8 flex justify-around items-center'>
                             <p>curti</p>
                             <p>comentar</p>
                             <p>rePostar</p>
                         </div>
                     </div>
                 </div>";
    }
}

?>