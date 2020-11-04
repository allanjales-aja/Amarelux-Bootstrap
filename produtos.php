<?php
    require_once('secundarios/conexao_bd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Produtos - AmareLux Eletro</title>
        <!--Conexões-->
        <?php
            require_once('secundarios/conexoes_head.html')
        ?>
    </head>
    <body>
        <!--Menu-->
        <?php
            include_once('secundarios/menu.html');
        ?>
        <div class = "jumbotron mt-2">
            <header>
                <h2 class = "display-6">Produtos</h2>
                <p class="lead">Preço e atendimento sem comparação!</p>
                <hr class="my-1">
            </header>
        </div>

        <div class = "container-fluid">
            <div class = "row ml-5 w-90">
                <div class = "col-w-15" id = "Categorias">
                    <h3 style="font-size: 21px;"><strong>Categorias</strong></h3>
                    <hr>
                    <ul>
                        <li onclick="select_todos('todos')" id="todos">Todos (14)</li>
                        <li onclick="select_categ('ar')" id="ar">Ar Condicionado (2)</li>
                        <li onclick="select_categ('fogao')" id="fogao">Fogões (2)</li>
                        <li onclick="select_categ('geladeira')" id="geladeira">Geladeiras (3)</li>
                        <li onclick="select_categ('lavaroupas')" id="lavaroupas">Lavadora de Roupas (2)</li>
                        <li onclick="select_categ('lavaloucas')" id="lavaloucas">Lava Louças (2)</li>
                        <li onclick="select_categ('microondas')" id="microondas">Micro-Ondas (3)</li>
                    </ul>
                </div>
            
                <div class = "col" class = "Produtos">
                    <?php
                        $sql = "select * from produtos";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            while($rows = $result->fetch_assoc()){
                    ?>
                    <div class = "ItemProdutos mr-4" id="<?php echo $rows["nome_prod"]; ?>" 
                    onmouseover="destacar(this)" onmouseout="normal(this)">
                        <br>
                        <img src="<?php echo $rows["nome_img"]; ?>" width="170px" onclick="zoom(this)">
                        <p class="DescricaoProdutos"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <p class="DescricaoProdutos" style="text-decoration: line-through;">
                            <?php if($rows["valor"] != null){ echo "R$ ",$rows["valor"];} 
                                else {echo "R$ 0.00";} ?></p>
                        <p class="PrecoProdutos">
                            <?php if($rows["valor"] != null){ echo "R$ ",$rows["valor_unit"];}
                                else {echo "ESGOTADO :(";} ?></p>
                    </div>
                    <?php
                            }
                        } else {
                            echo "Nenhum produto cadastrado!";
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