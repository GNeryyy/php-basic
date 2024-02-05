<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Casting</title>
</head>

<body>

   <?php 

       //gettype() => retorna o tipo da variavel
       $valor = true;

        //$valor2 = (string)$valor;
        //$valor2 = (int)$valor; //integer ou int
        //$valor2 = (string)$valor;
        //$valor2 = (double)$valor; //float ou double
        // 
        //$valor2 = (boolean) $valor; //bool, boolean 
        //$valor2 = (int) $valor; retorna = 0

        $valor2 = (string) $valor;

       echo $valor. ' '. gettype ($valor);
       echo '<br>';
       echo $valor2.' '.gettype ($valor2);

   ?>

</body>

</html>