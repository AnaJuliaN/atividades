<?php 
    include "conexao.php";
    include "cabecalho.php";
    $genero = $_POST["genero"];
    $banda = $_POST["banda"];
    $insert = "INSERT INTO banda(
                                    id_banda,
                                    nome, 
                                    cod_genero
                                ) VALUES (
                                    '$banda',
                                    '$genero'
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "Especie inserida com sucesso";
?>