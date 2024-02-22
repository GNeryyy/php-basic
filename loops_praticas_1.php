<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Loos praticas 1 </title>
</head>

<body>

   <?php 

        $registros = array(
            array('titulo' => 'Titulo noticio 1', 'conteudo' => 'Conteudo noticia 1'), 
            array('titulo' => 'Titulo noticio 2', 'conteudo' => 'Conteudo noticia 2'), 
            array('titulo' => 'Titulo noticio 3', 'conteudo' => 'Conteudo noticia 3'),
            array('titulo' => 'Titulo noticio 4', 'conteudo' => 'Conteudo noticia 4'),
        );
        
        echo '<pre>';
        print_r($registros);
        echo'</pre>';
    
        $idx = 0;

        //count -> conta a quantidade de elementos de array
        
        /*
        while($idx < count($registros)) {

            echo '<h3>'. $registros[$idx]['titulo'] .'</h3>';
            echo '<p>'. $registros[$idx]['conteudo'] .'</p>';

            echo '<hr>';

            $idx++;

        }
        */

        /*
        do {
            
            echo '<h3>'. $registros[$idx]['titulo'] .'</h3>';
            echo '<p>'. $registros[$idx]['conteudo'] .'</p>';

            echo '<hr>';

            $idx++;

        } while ($idx < count($registros))
        */

        for($idx = 0; $idx < count($registros); $idx++) {

            echo '<h3>'. $registros[$idx]['titulo'] .'</h3>';
            echo '<p>'. $registros[$idx]['conteudo'] .'</p>';

            echo '<hr>';
        }
        
   ?>
</body>

</html>