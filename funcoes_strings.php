<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Funções de strings</title>
</head>

<body>

   <?php 

    $texto = 'Curso Completo de PHP';

    //String to lower
    echo $texto . '<br>';
    echo strtolower($texto);

    echo '<hr>';

    //String to upper
    echo $texto . '<br>';
    echo strtoupper($texto);

    echo '<hr>';

    //Upper case first
    echo $texto . '<br>';
    echo ucfirst($texto);

    echo '<hr>';

    //String length 
    echo $texto . '<br>';
    echo strlen($texto);

    echo '<hr>';

    //String replace
    echo $texto . '<br>';
    echo str_replace('PHP', 'JavaScript', $texto);

    echo '<hr>';

    //Subs string
    echo $texto . '<br>';
    echo substr($texto, 0, 4);


   ?>
</body>

</html>