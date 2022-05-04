<?php
    setcookie("auth_token", " ", time() -3600);
    setcookie("user_session", " ", time() -3600);

    header('Location: login.php');
?>