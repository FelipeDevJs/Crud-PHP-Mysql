<?php
session_start();
include_once("db.php");

if(isset($_COOKIE['auth_token'])){
    $email = $_COOKIE['auth_token'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if($result->num_rows){
        while($users = $result->fetch_object()){
            $name = $users->name;
            $id = $users->id;
            setcookie('user_session', $name);
        }
    }else{
        echo "nenhum email encontrado";
    };
}else{
    header('Location: login.php');
};

?>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style/textearea.css">
<script src="https://cdn.socket.io/4.5.0/socket.io.min.js"></script>

<title>dash</title>

<body>
    <?php
        if($_COOKIE['user_session'] == null)
        header('Location: dash.php');
        echo "<script> 
                var socketIO = io('http://localhost:3000');
                socketIO.emit('connected', '$id');
            </script>" 
        ?>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                  Icon when menu is closed.

                  Heroicon name: outline/menu

                  Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                  Icon when menu is open.

                  Heroicon name: outline/x

                  Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                            alt="Workflow">
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="profile.php"
                                class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Profile</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button onClick="document.location.href='profile.php'" type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="img/user.png" alt="">
                            </button>
                        </div>

                        <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="profile.php" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Profile</a>
            </div>
        </div>
    </nav>
    <div>
        <?php
        include_once("insertComment.php");
        ?>
        <!-- twets -->
        <div class="flex justify-center">
            <div class=" w-full md:w-2/5 m-2.5">
                <?php
              include_once("getComments.php");  
            ?>
            </div>
            <div class="bg-gray-500 absolute overflow-auto right-5 w-60 h-auto">
                
                <div class="w-52 flex justify-center p-2.5 text-white">
                    <p>Amigos Online</p>
                </div>
                <div class=" w-full h-72 ">
                    <?php
                        include_once("searchuser.php");
                    ?>
                    <!-- <div class="w-44 h-auto p-1.5 flex flex-row border-y-2">
                        <div class="w-9 h-9 rounded-full  bg-red-400"></div>
                        <div class="w-4/5 h-10 flex justify-between items-center">
                            <div class="p-2.5">
                                <p>Felipe</p>
                            </div>
                            <div class="p-2.5">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            </div>    
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>