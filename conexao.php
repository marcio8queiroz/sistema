<?php

require_once("config.php");
@session_start();

try {
    $pdo = new PDO("mysql:dbname=$banco;host", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar o banco!!' .$e;
}


?>