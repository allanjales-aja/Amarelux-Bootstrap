<?php
    require_once('conexao_bd.php');

    if(isset($_POST['nomec']) && isset($_POST['cpf']) && isset($_POST['datan']) && isset($_POST['cep']) && isset($_POST['enderecoc']) && isset($_POST['telefone']) && isset($_POST['emailc']) && isset($_POST['senhaa']) && isset($_POST['senhab']) && isset($_POST['oferta'])){

        $nomec = $_POST['nomec'];
        $cpf = $_POST['cpf'];
        $datan = $_POST['datan'];
        $cep = $_POST['cep'];
        $enderecoc = $_POST['enderecoc'];
        $telefone = $_POST['telefone'];
        $emailc = $_POST['emailc'];
        $senhaa = $_POST['senhaa'];
        $senhab = $_POST['senhab'];
        $oferta = $_POST['oferta'];}
        
        if($nomec !="" && $cpf !="" && $datan !="" && $cep !="" && $enderecoc !="" && $telefone !="" && 
        $emailc !="" && $senhaa !="" && $senhab !="" && $oferta !="" && $senhaa === $senhab){
            if($oferta = "true"){$oferta = 1;}else{$oferta = 0;}
            $sql = "insert into clientes (nome_cli, cpf, datan, cep, endereco, telefone, email, senha, oferta)
             values ('$nomec', '$cpf', '$datan', '$cep', '$enderecoc', '$telefone', '$emailc', '$senhaa', 
             '$oferta')";

            $result = $conn->query($sql);

            echo "<h2> Parabéns!!! Você é cliente Amarelux!<h2>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Amarelux</title>
</head>
<body>
    <h4><a href='produtos.php'>Escolher produtos</a><h4>
</body>
</html>

<?php
    } else{
        echo "<h3>Click no botão para retornar à página anterior e verifique:<h3>
            <p># Campos não preenchidos;</p>
            <p># Senha repetida é diferente da anterior;</p>";
    }
?>