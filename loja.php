<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Nossas lojas - AmareLux Eletro</title>
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
                <h2 class = "display-6">Nossas Lojas</h2>
                <p class="lead">Elas existem especialmente pra você!</p>
                <hr class="my-1">
            </header>
        </div>

        <div class="Lojas" style="margin-left: 30px;" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
            <h3>Rio de Janeiro - RJ</h3>
            <p>Avenida Almirante Frontin, 50</p>
            <p>2 &ordm; piso</p>
            <p>Ramos</p>
            <p>(21) 2222-2222</p>
        </div>

        <div class="Lojas" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
            <h3>São Paulo - SP</h3>
            <p>Estrada das Lágrimas, 1029</p>
            <p>Loja 2</p>
            <p>Ipiranga</p>
            <p>(11) 1111-2222</p>
        </div>

        <div class="Lojas" onmouseover="destacarLoja(this)" onmouseout="normalLoja(this)">
            <h3>Vila Velha - ES</h3>
            <p>Rua Sebastião Gaiba, 100</p>
            <p>Térreo</p>
            <p>Vila Garrido</p>
            <p>(27) 2222-1111</p>
        </div>

        <!--Rodapé-->
        <?php
            include_once('secundarios/rodape.html')
        ?>
    </body>
</html>