<?php
    require_once('secundarios/conexao_bd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Pedido - AmareLux Eletro</title>
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
                <h2 class = "display-6">Pedido</h2>
                <p class="lead">Escolha e faça já o seu pedido! A Amarelux quer te fazer feliz!</p>
                <hr class="my-1">
            </header>
        </div>

        <div class = "container mr-5"> 
<<<<<<< HEAD
            <form class = "form-inline justify-content-center" method = "post" action = "secundarios/InsercaoPedido.php">
=======
            <form class = "form-inline justify-content-center" method = "post" action = "InsercaoPedido.php">
>>>>>>> ac602863a15617adfd2ef5f843d8d2dee674897b
                <div class = "row mb-4">
                    <label for="prod" class="TituloGeral mr-2">Produto:</label>
                    <select class="form-control-md mr-5 bg-info text-white" name="prod" id="prod">
                    <?php
                        $sql = "select * from produtos where valor is not null";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            while($rows = $result->fetch_assoc()){
                    ?>
                    <option value="<?php echo $rows["cod_produtos"]?>"><?php echo $rows["descricao"]; ?></option>
            
                    <?php
                            }
                        } else {
                            echo "Nenhum pedido realizado!";
                            }
                    ?> 
                    </select>

                    <label for="qtd" class="TituloGeral mr-2">Quantidade:</label>
                    <input class="form-control-md mr-5 " type="number" id="qtd" name="qtd" placeholder = "Apenas números">
                </div>
                
                <div class = "row mb-4">           
                    <label for="emailp" class="TituloGeral mr-2">E-mail:</label>
                    <input class="form-control-md mr-5" type="email" id="emailp" name="emailp" placeholder = "Digite e-mail cadastrado">

                    <label for="senhap" class="TituloGeral mr-2">Senha:</label>
                    <input class="form-control-md mr-5" type="password" id="senhap" name="senhap" placeholder = "Digite senha cadastrada">
                    
                    <a class="btn btn-outline-success mr-3" href="cadastrar.php">Cadastre-se</a>
                </div>
<<<<<<< HEAD

                <button class="btn btn-outline-dark btn-block w-50" type="submit" value="IncluirPedido">Incluir no Pedido</button>
            </form>
=======
            </form>
            <div class = "row mb-4 justify-content-center"> 
                <button class="btn btn-outline-dark" type="submit" value="IncluirPedido">Incluir no Pedido</button>
            </div>
>>>>>>> ac602863a15617adfd2ef5f843d8d2dee674897b
            <hr>
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