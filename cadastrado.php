<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>    
<?php

$conexao = new mysqli("localhost", "root", "", "cadastro");
if ($conexao->connect_error){
    die("Falha na conexão: " .$conexao->connect_error);
}

$sql = "INSERT INTO pessoa(cpf, nome, logradouro, numero, bairro, telefone_celular, email, senha )
        VALUES ('".$_POST['cpf']."', '".$_POST['nome']."', '".$_POST['logradouro']."', '".$_POST['num']."', '".$_POST['bairro']."', '".$_POST['cel']."', '".$_POST['email']."', '".$_POST['senha']."')" ;
$insert = $conexao->query($sql);
        if ($insert === TRUE){
            echo '<body style="background-color: black;">
            <div class="w3-container w3-center">
            <a href="index.html" style="text-decoration: none;" class="w3-text-white" style="text-shadow:1px 1px 0 #444"><h1><b>Cadastrado com Sucesso</b></h1></a>
            </div>
            </body>
            </html>';
        }
        else {
            echo '<body style="background-color: black;">
            <div class="w3-container w3-center">
            <a href="index.html" style="text-decoration: none;" class="w3-text-white" style="text-shadow:1px 1px 0 #444"><h1><b>Erro ao cadastrar</b></h1></a>
            </div>
            </body>
            </html>';
        }
        $conexao->close();
?>