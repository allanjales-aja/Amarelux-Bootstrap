<?php
    require_once('conexao_bd.php');

    if(isset($_POST['prod']) && isset($_POST['qtd']) && isset($_POST['emailp']) && isset($_POST['senhap'])){

        $prod = $_POST['prod'];
        $qtd = $_POST['qtd'];
        $emailp = $_POST['emailp'];
        $senhap = $_POST['senhap'];
        
        if($qtd !="" && $emailp !="" && $senhap !=""){
            $sql = "select * from clientes where email = '$emailp' and senha = '$senhap'";
                        
            $result = $conn->query($sql);
            if($result and $result->num_rows > 0 ){
                while($rows = $result->fetch_assoc()){
                    echo "<script>alert('Incluído no seu pedido.')</script>";
                    echo $rows['nome_cli'],", obrigado!";
                    echo "<p><a href='FormPedido.php'>Retornar a Pedidos</a></p>";
         
                    $cli =  $rows['cod_clientes'];
                    $sqli = "insert into ped (cod_clientes, cod_produtos, quantidade)
                    values ('$cli', '$prod', '$qtd')";        
                   $resulta = $conn->query($sqli);
                   if($resulta){
                       echo "<h2> Pedido efetuado!<h2>";}
                }           
            }   }else{echo "<script>alert('E-MAIL ou/e SENHA com erro.')</script>";
                echo "<script>alert('Click no botão para retornar à página anterior')</script>";}
    }              else{
                        echo "<script>alert('Click no botão para retornar à página anterior')</script>";
                        echo "<script>alert('Verifique campos não preenchidos')</script>";
                    }
    
?>