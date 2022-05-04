<?php

$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "crudmysql";

//conexao
$conn = new mysqli($host, $user, $pwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("connection failed");
  };
?>