<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            width: 100%;
            background-color: aquamarine;
            padding-bottom: 2%;
        }
        
        label{
            
            display: flex;
            justify-content:left;
        }

        .form{
            
            margin-left: 33%;
            margin-right: 33%;
            position: absolute;
            width: 100%;
            
        }

        h1{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        input{
            background-color: gray;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <a href="listar.php" class="w3-button">
            <i class="w3-xlarge fa fa-arrow-left"></i>
        </a>
        <h1>Confira os dados</h1>
    </div>
    <br>
    <br>
    <div class="form">
    <form action="excluido.php" method="post" >
        <label>Nome: </label>
        <input class="w3-border w3-round" style="width: 30%;" name="nome" value="<?php echo $_GET['nome']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>CPF:</label>
        <input class="w3-border w3-round" style="width: 30%;" name="cpf" value="<?php echo $_GET['cpf']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>Logradouro: </label>
        <input class="w3-border w3-round" style="width: 30%;" name="logradouro" value="<?php echo $_GET['logradouro']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>Número: </label>
        <input class="w3-border w3-round" style="width: 30%;" name="num" value="<?php echo $_GET['numero']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>Bairro: </label>
        <input class="w3-border w3-round" style="width: 30%;" name="bairro" value="<?php echo $_GET['bairro']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>Telefone/Celular: </label>
        <input class="w3-border w3-round" style="width: 30%;" type="number" name="cel" value="<?php echo $_GET['telefone_celular']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>E-mail: </label>
        <input class="w3-border w3-round" style="width: 30%;" type="email" name="email" value="<?php echo $_GET['email']; ?>" readonly>
        <br>
        <br>
        <br>
        <label>Senha: </label>
        <input class="w3-border w3-round" style="width: 30%;" type="password" name="senha" value="<?php echo $_GET['senha']; ?>" readonly>
        <br>
        <br>
        <button class="w3-button w3-round-large w3-black" name="btn">Confirmar Exclusão</button>
        <br>
        <br>
    </form>
</div>
</body>
</html>