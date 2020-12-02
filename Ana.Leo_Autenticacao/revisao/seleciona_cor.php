<?php 
    header("Content-Type: application/json");
    include "conexao.php";
    
    $select = "SELECT nome, id_cor FROM cor";

    $res = mysqli_query($conexao, $select) or die(mysqli_error($conexao));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
