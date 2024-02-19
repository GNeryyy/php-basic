<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Array Basico</title>
</head>

<body>

   <?php 

        //Sequenciais (numéricos)
        /*$listas_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
        $listas_frutas[] = 'Laranja';
        

        echo $listas_frutas[2];
        echo '<pre>';
        var_dump($listas_frutas);
            '</pre>';

        echo '<hr>';

        echo '<pre>';
        print_r($listas_frutas);
        echo '</pre>';*/

        //Associativos

        $listas_frutas = array(
            'a' => 'Banana',
            'b' => 'Maça', 
            'c' => 'Morango', 
            'd' => 'Uva', 
            'e' => 'Abacate');

        var_dump($listas_frutas);    

    

         echo $listas_frutas['t'] = 'COCO';



   ?>
</body>

</html>