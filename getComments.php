<?php
include_once("db.php");

$consunta = "SELECT * FROM comments";

$result = $conn->query($consunta);
if($result->num_rows){
    while($comments = $result->fetch_object()){
        $id = $comments->id_user;
        $comment = $comments->comment;
        echo "<div class='border-2 border-gray-200 rounded-3xl w-full m-1.5 p-2.5'>
                <div class='flex flex-row items-start'>
                    <div class='bg-green-100 w-14 h-14'></div>
                        <div class='h-auto m-1.5 flex flex-row'>
                            <p></p>
                            <p class='mx-1.5'>$id</p>
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
    };
}else{
    echo "deu errado";
};


?>