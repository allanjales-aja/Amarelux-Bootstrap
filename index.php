<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>AmareLux Eletro</title>
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

        <main class = "jumbotron jumbotron-fluid">
            <p class = "h1"><strong>Seja bem vindx!</strong></p>
            <p class = "h4 mt-4">Aqui em nossa loja, 
                <em onmouseover="destacarMain(this)" onmouseout="normalMain(this)">programadores têm desconto
                </em> nos produtos para sua casa!
            </p>
        </main>

        <!--Rodapé-->
        <?php
            include_once('secundarios/rodape.html')
        ?>
    </body>
</html>