<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Operadores incremento e decremento</title>
</head>

<body>

    <h3>Pós-incremento</h3>

   <?php 

      $a = 7;

      echo "O valor contido em a é $a <br>";
      echo 'O valor contido em a após o incremento é ' . $a++ . ' <br>';
      echo "O valor atualizado é $a";

   ?>

<h3>Pré-incremento</h3>
    
    <?php 
 
       $a = 8;
 
       echo "O valor contido em a é $a <br>";
       echo 'O valor contido em a pré o incremento é ' . --$a . ' <br>';
       echo "O valor atualizado é $a";
 
    ?>
 

</body>

</html>