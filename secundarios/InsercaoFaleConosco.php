<?php
    require_once('conexao_bd.php');

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];}
        
        if($nome !="" && $email !="" && $mensagem !=""){
            $sql = "insert into mensagens (nome_msg, email, mensagem) values ('$nome', '$email', '$mensagem')";
            $result = $conn->query($sql);

            echo "<h2>A Amarelux agradece sua mensagem!<h2>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Amarelux</title>
</head>
<body>
    <h4><a href='index.php'>Página Inicial</a><h4>
</body>
</html>

<?php
    } else{
        echo "<h2>Por gentileza verificar dados inseridos.<h2>";
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mensagem Amarelux</title>
        </head>
        <body>
            <h4><a href='faleconosco.php'>Retornar a "Fale Conosco"</a><h4>
        </body>
        </html>
<?php
    }
?>