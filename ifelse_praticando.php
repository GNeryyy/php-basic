<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - IF-ELSE-Praticando</title>
</head>

<body>

   <?php 
        
         $usuario_possui_cartao_loja = true;
         $valor_compra = 101;

         $valor_frete = 50;
         $recebeu_desconto_frete = false;
         
        if($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }

   ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja ?
        <?php 
            if($usuario_possui_cartao_loja == true) {
                echo 'Yes';
            } else  {
                echo 'No';
            }
        ?>    
    </p> 
    
    <p>Valor da compra:<?= $valor_compra ?></p>

    <p>recebeu desconto no frete ? 
        <?php 
            if($recebeu_desconto_frete == true) {
                echo 'Yes';
            } else  {
                echo 'No';
            }
        ?>    
    </p>

    <p>Valor do frete:<?= $valor_frete ?></p>



</body>

</html>