<?php

   /* define('HOST', 'localhost');
    define("USER", 'root');
    define("PASS", '123456');
    define('BASE', 'cadastro');

    $connection = new MySQLi(HOST, USER, PASS, BASE); */

    $hostname = "localhost";
    $bancoDeDados = "cadastro";
    $usuario = "root";
    $senha = "";

    $mysql = new mysqli($hostname, $usuario, $senha, $bancoDeDados);
    if($mysql->connect_errno){
        echo "Falha ao se Conectar ao BD: (" . $mysql->connect_errno . ")" . $mysql->connect_error;
    }

?>