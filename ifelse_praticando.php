<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - IF-ELSE - Praticando</title>
</head>

<body>

   <?php 
        
         $usuario_possui_cartao_loja = true;
         $valor_compra = 500;

         $valor_frete = 50;
         $recebeu_desconto_frete = true;
        
         $valo_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
         $recebeu_desconto_frete = $valor_frete != $valo_frete_aux ? true : false;   

         $valor_frete = $valo_frete_aux;
         /*
        if($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
            $valor_frete = 0;

        } else if($usuario_possui_cartao_loja == true && $valor_compra >= 300){
            $valor_frete = 10;

        } else if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
            $valor_frete = 25;

        } else {
            $recebeu_desconto_frete = false;
        }*/
   ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja ? <?=$usuario_possui_cartao_loja ? 'Yes' : 'No';?>
        <?php 
            // <condição> ? true : false 


            /*
            if($usuario_possui_cartao_loja == true) {
                echo 'Yes';
            } else  {
                echo 'No';
            }*/
        ?>    
    </p> 
    
    <p>Valor da compra:<?= $valor_compra ?></p>

    <p>recebeu desconto no frete ? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO';?>

    </p>

    <p>Valor do frete:<?= $valor_frete ?></p>



</body>

</html>