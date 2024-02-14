<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Funções Matematicas</title>
</head>

<body>

   <?php 

    $num = 7.5;

    echo ceil($num); //Arredonda para cima

    echo '<hr>';

    $num1 = 8.9;

    echo floor($num1); //Arredonda para baixo

    echo '<hr>';

    $num2 = 8.5; //.0 e .4 => baixo / .5 => cima

    echo round($num2); //Arredonda com base a fração

    echo '<hr>';

    echo rand(10, 20); //Gerar um valor aleatório - 0 até randmax
    echo '<br>'. getrandmax();

    echo '<hr>';

    echo sqrt(10); //Gerar uma raiz quadrada do numero que atribuir
    




   ?>
</body>

</html>