<?php 
    include "conexao.php";
    include "cabecalho.php";
    $genero = $_POST["genero"];
    
    $insert = "INSERT INTO genero(
                                    id_genero,
                                    nome 
                                ) VALUES (
                                    '$genero',
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "Genero inserido com sucesso";
?>