<?php


$host = "db4free.net";
$port = "3306";
$db = "instrumentos";
$user = "ana_julia";
$senha = "a738bc27f";

$conexao = @mysqli_connect($host,$user,$senha,$db,$port) 
    or die("Erro ao abrir a conexão com o banco de dados.");

mysqli_set_charset($conexao, "utf8");
?>