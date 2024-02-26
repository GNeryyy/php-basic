<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Loos praticas 2 </title>
</head>

<body>

   <?php 

        $funcionario = array(
            array('nome' => 'Gabriel', 'salario' => 2500), 
            array('nome' => 'Maria', 'salario' => 1500),  
            array('nome' => 'Julia', 'salario' => 1900), 

        );

        echo '<pre>';
        print_r($funcionario);
        echo '</pre>';

        echo '<br>';

        
        foreach ($funcionario as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br>";

            }
            echo '<hr>';
        }
        
   ?>
</body>

</html>