<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - echo - print</title>
</head>

<body>
   <?php 

    $nome = 'jorge';
    $cor = 'azul';
    $idade = 25;
    $ativade_preferida = 'ler livros';

    //operador . 
        
    echo 'Olá '. $nome .', vi  que vc curti '. $cor .' e tem '. $idade .' ano e que gosta de  '. $ativade_preferida .'';

    //aspas duplas
    echo '<br>', '<br>';

    echo "Olá $nome, vi que vc curti a cor $cor, e tem $idade anos que gosta de $ativade_preferida"


   ?>
</body>

</html>