<?php
    include_once("db.php");


    $busca = "SELECT * FROM users";

    $res = $conn->query($busca);
    if($res->num_rows){
        while($user = $res->fetch_object()){
            $name = $user->name;
            echo "<div class='w-full rounded-md h-auto p-1.5 flex flex-row border-y-2'>
                    <div class='w-9 h-9 rounded-full  bg-red-400'></div>
                    <div class='w-4/5 h-10 flex justify-between items-center'>
                        <div class='p-2.5 text-white'>
                            <p>$name</p>
                        </div>
                        <div>
                            <div class='w-2 h-2 bg-gray-400 rounded-full'></div>
                        </div>    
                    </div>
                </div>";
        }
    }
?>