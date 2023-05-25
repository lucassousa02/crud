<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluído</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>    
<?php

$conexao = new mysqli("localhost", "root", "", "cadastro");
if ($conexao->connect_error){
    die("Falha na conexão: " .$conexao->connect_error);
}

$sql = "DELETE FROM pessoa WHERE cpf = '".$_POST['cpf']."'";
$delete = $conexao->query($sql);
        if ($delete === TRUE){
            echo '<body style="background-color: black;">
            <div class="w3-container w3-border w3-center">
            <a href="listar.php" style="text-decoration: none;" class="w3-text-white" style="text-shadow:1px 1px 0 #444"><h1><b>Excluído com Sucesso</b></h1></a>
            </div>
            </body>
            </html>';
        }
        else {
            echo '<body style="background-color: black;">
            <div class="w3-container w3-border w3-center">
            <a href="listar.php" style="text-decoration: none;" class="w3-text-white" style="text-shadow:1px 1px 0 #444"><h1><b>Erro ao excluir</b></h1></a>
            </div>
            </body>
            </html>';
        }
        $conexao->close();
?>