<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastre-se - AmareLux Eletro</title>
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
                <h2 class = "display-6">Cadastre-se</h2>
                <p class="lead">Faça parte da família Amarelux!</p>
                <hr class="my-1">
            </header>
        </div>
        
        <div class = "container mr-5">
            <form class = "form-inline justify-content-center" method = "post" action = "insercaocadastrar.php">
                <div class = "row mb-4">
                    <label for="nomec" class="TituloGeral mr-2">Nome:</label>
                    <input  class="form-control mr-5" type="text" id="nomec" name="nomec" placeholder = "Nome completo">

                    <label for="cpf" class="TituloGeral mr-2">CPF:</label>
                    <input class="form-control mr-5" type="number" id="cpf" name="cpf" placeholder = "Apenas números">

                    <label for="datan" class="TituloGeral mr-2">Data de Nascimento:</label>
                    <input class="form-control mr-5" type="date" id="datan" name="datan">
                </div>

                <div class = "row mb-4">
                    <label for="cep" class="TituloGeral mr-2">CEP:</label>
                    <input class="form-control mr-2" type="number" id="cep" name="cep" placeholder = "Apenas números">

                    <label for="enderecoc" class="TituloGeral mr-2">Endereço:</label>
                    <input class="form-control mr-2" type="text" id="enderecoc" name="enderecoc"  style="width:400px;" 
                        placeholder = "rua, número, complemento - bairro - município - UF">
                    
                    <label for="telefone" class="TituloGeral mr-2">Telefone:</label>
                    <input class="form-control mr-2" type="number" id="telefone" name="telefone" placeholder = "DDDxxxxxxxxx">
                </div>
                
                <div class = "row mb-4">
                    <label for="emailc" class="TituloGeral mr-2">E-mail:</label>
                    <input class="form-control mr-3" type="email" id="emailc" name="emailc" placeholder = "email@exemplo.com.br">

                    <label for="senhaa" class="TituloGeral mr-2">Digite sua senha:</label>
                    <input class="form-control mr-3" type="password" id="senhaa" name="senhaa" placeholder = "Digite 8 caracteres">

                    <label for="senhab" class="TituloGeral mr-2">Confirme sua senha:</label>
                    <input class="form-control mr-3" type="password" id="senhab" name="senhab" placeholder = "Repita sua senha">
                </div>

                <div class = "row mb-4">
                    <div class = "form-check ml-5">
                        <input class = "form-check-input" type="radio" id="1" name="oferta" value="1" checked>
                        <label class = "form-check-label mr-5" for="1" style="font-size: 16px;">Quero receber ofertas Amarelux</label>
                    </div>
                    <div class = "form-check">
                        <input class = "form-check-input" type="radio" id="0" name="oferta" value="0"> 
                        <label class = "form-check-label mr-5" for="0" style="font-size: 16px;">Vou deixar de aproveitar as ofertas Amarelux</label>
                    </div>
                </div>

                <button class="btn btn-primary btn-block w-50" type="submit" value="Cadastrar">Cadastrar</button>
            </form>
        </div>
        <!--Rodapé-->
        <?php
            include_once('secundarios/rodape.html')
        ?>
    </body>
</html>