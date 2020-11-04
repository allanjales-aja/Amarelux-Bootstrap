<?php
    require_once('conexao_bd.php');

    if(isset($_POST['nomec']) && isset($_POST['cpf']) && isset($_POST['datan']) && isset($_POST['cep']) && 
    isset($_POST['enderecoc']) && isset($_POST['telefone']) && isset($_POST['emailc']) && isset($_POST['senhaa']) 
    && isset($_POST['senhab']) && isset($_POST['oferta'])){

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
            if($result){
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
    <h4><a href='FormPedido.php'>Escolher produtos</a><h4>
</body>
</html>

<?php
    }else{
        echo "<script>
            alert('NOME, CPF ou E-MAIL já constam nos nossos registros para um mesmo cliente.')
            </script>"; 
        }
        }else{
        echo "<script>
        alert('Click no botão para retornar à página anterior')
        </script>";
        echo "<script>
        alert('Verifique campos não preenchidos e se DIGITE SUA SENHA é igual a CONFIRME SUA SENHA')
        </script>";
        }
?>