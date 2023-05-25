<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        } 
    </style>
</head>
<body>
    <h1 class="w3-border w3-red w3-round-xxlarge" style="text-align: center;">Lista de Cadastros</h1>
    <br><br>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "cadastro";

    $conexao = new mysqli($server, $username, $password, $database);
    if ($conexao->connect_error){
        echo "Falha ao se conectar com a base de dados: $conexao->connect_error";
    }

    $sql = "SELECT * FROM pessoa";
    $select = $conexao->query($sql);
    echo'<table class="w3-table-all w3-centered">
          <tr class="w3-red">
             <th>CPF</th>
             <th>Nome</th>
             <th>Logradouro</th>
             <th>Número</th>
             <th>Bairro</th>
             <th>Telefone</th>
             <th>E-mail</th>
             <th>Senha</th>
          </tr>';   
    foreach ($select as $item){
        echo '<tr>';
        echo '<td class="w3-center">'.$item['cpf'].'</td>';
        echo '<td class="w3-center">'.$item['nome'].'</td>';
        echo '<td class="w3-center">'.$item['logradouro'].'</td>';
        echo '<td class="w3-center">'.$item['numero'].'</td>';
        echo '<td class="w3-center">'.$item['bairro'].'</td>';
        echo '<td class="w3-center">'.$item['telefone_celular'].'</td>';
        echo '<td class="w3-center">'.$item['email'].'</td>';
        echo '<td class="w3-center">'.$item['senha'].'</td>';
        echo '<td class="w3-center">'.'<a href="excluir.php?nome='.$item['nome'].'&cpf='.$item['cpf'].'&logradouro='.$item['logradouro'].'&numero='.$item['numero'].'&bairro='.$item['bairro'].'&telefone_celular='.$item['telefone_celular'].'&email='.$item['email'].'&senha='.$item['senha'].'&btn="><i class="fa fa-trash"></i></a></td>';
        echo '<td class="w3-center">'.'<a href="atualizar.php?nome='.$item['nome'].'&cpf='.$item['cpf'].'&logradouro='.$item['logradouro'].'&numero='.$item['numero'].'&bairro='.$item['bairro'].'&telefone_celular='.$item['telefone_celular'].'&email='.$item['email'].'&senha='.$item['senha'].'&btn="><i class="fa fa-refresh"></i></a></td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <a href="index.html" class="w3-button w3-red w3-border w3-round-xlarge">Voltar</a>
</body>
</html>
