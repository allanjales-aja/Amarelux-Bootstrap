<?php
    require_once('secundarios/conexao_bd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Fale Conosco - AmareLux Eletro</title>
        <!--Conexões-->
        <?php
            require_once('secundarios/conexoes_head.html')
        ?>
    </head>
    <body>
        <!--Menu-->
        <?php
            include_once('secundarios/menu.html')
        ?>

        <div class = "jumbotron mt-2">
            <header>
                <h2 class = "display-6">Fale Conosco</h2>
                <p class="lead">Sinta-se em casa, a Amarelux é sua!</p>
                <hr class="my-1">
            </header>
        </div>

        <div class = "container-fluid ml-5">
            <div class = "row ml-5">
                <div class = "col ml-5">
                    <img src="./imagens/e-mail.png" width="40px" class="FaleConosco">
                    <a href="#" class="FaleConosco" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">contato@amareluxeletro.com.br</a>
                </div>

                <div class = "col">
                    <img src="./imagens/Whatsapp.png" width="80px" class="FaleConosco">
                    <a href="#" class="FaleConosco" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">(21) 9999-2020</a>
                </div>
            </div>
        </div>

        <div class = "container mt-5 w-70">
            <div class = "row">
                <div class = "col">
                    <form class = "form-inline justify-content-center" method="post" action="secundarios/insercaofaleconosco.php">
                        <div class = "row mb-4">
                            <label for="nome" class="TituloGeral mr-2">Nome:</label>
                            <input class="form-control mr-3" type="text" id="nome" name="nome" placeholder = "Nome completo">

                            <label for="email" class="TituloGeral mr-2">E-mail:</label>
                            <input class="form-control mr-3" type="email" id="email" name="email" placeholder = "email@exemplo.com.br">
                
                            <label for="mensagem" class="TituloGeral ml-5 mr-2">Mensagem:</label>
                            <textarea class="form-control mr-3 mt-3" id="mensagem" name="mensagem" rows="7" cols="40" 
                                placeholder = "Fique à vontade, a Amarelux quer te conhecer!"></textarea>
                        </div>

                        <button class="btn btn-primary btn-block w-50" type="submit" value="Enviar">Enviar</button>
                    </form>
                </div>    

                <div class = "col">
                    <?php
                        $sql = "select * from mensagens";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            while($rows = $result->fetch_assoc()){
                                echo "Data: ", $rows['data_msg'], "<br>";
                                echo "Nome: ", $rows['nome_msg'], "<br>";
                                echo "Mensagem: ", $rows['mensagem'], "<br>";
                                echo "<hr>";
                            }
                        } else {
                            echo "Nenhuma mensagem enviada!";
                            }
                    ?>
                </div>
            </div>    
        </div>

        <!--Rodapé-->
        <?php
            include_once('secundarios/rodape.html')
        ?>
    </body>
</html>