<?php


$host = "db4free.net";
$db = "instrumentos";
$user = "ana_julia";
$senha = "3306";

$conexao = @mysqli_connect($host,$user,$senha,$db) 
    or die("Erro ao abrir a conexão com o banco de dados.");

mysqli_set_charset($conexao, "utf8");
?>