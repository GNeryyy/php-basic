<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Array Basico</title>
</head>

<body>

   <?php 

        
        $lista_coisas = [];

        $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maça', 3 =>'Uva', 4 => 'Moranga');
        $lista_coisas['pessoas'] = [1 => 'Joao',2 =>  'Jose',3 =>  'Maria'];

        echo '<pre>';

        print_r($lista_coisas);

        '</pre>';

        echo '<hr>';

        echo $lista_coisas['pessoas'][2];
        echo '<br>';
        echo $lista_coisas['frutas'][2];



   ?>
</body>

</html>