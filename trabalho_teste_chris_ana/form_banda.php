<?php
    function select(){
        include "conexao.php";
        $select = "SELECT nome, id_genero FROM banda ORDER BY nome";
        $res = mysqli_query($con, $select);
        while ($linha = mysqli_fetch_assoc($res)){
            echo "<option value=".$linha["id_genero"].">".$linha["nome"]."</option>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../../../jquery-3.5.1.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#banda").change(function(){
                    //PHP pra buscar
                    var id = $("#banda").val();
                    $.post("seleciona_genero.php", {"id":id}, function(msg){
                        option="<option label='Gênero da Banda' />";
                        $.each(msg, function(indice, valor){
                            option+="<option value='"+valor.id_genero+"'> "+valor.nome+" </option>";
                        });
                        $("#genero").html(option);
                    });
                });
            });
        </script>

    <title>Cadastro Especie</title>
</head>
<body>
    <?php include "cabecalho.php" ?>
    <form action="inserir_banda.php" method="post">
    <input type="text" name="banda" placeholder="Nome da banda...">
        <select name="genero" id="genero">
            <option label='Gênero da Banda' >
        </select>
        <br>
        <button>Cadastrar</button>
        <hr />
    </form>
</body>
</html>