<?php 
    include "conexao.php";
    include "cabecalho.php";
    $nome_musica = $_POST["nome_musica"];
    $genero = $_POST["genero"];
    $banda = $_POST["banda"];
    $youtube = $_POST["youtube"];
    $insert = "INSERT INTO musica(
                                    id_musica,
                                    nome, 
                                    cod_banda,
                                    youtube
                                ) VALUES (
                                    '$nome_musica',
                                    '$genero',
                                    '$banda',
                                    '$youtube'
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "Familia inserida com sucesso";
?>