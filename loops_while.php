<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Loops While</title>
</head>

<body>

   <?php 

        $num = 1;
        //operadores comparação / lógicos
        echo ' Inicio do loop <br>';

        while($num < 10) {

            $num += 1;

            if($num == 2 || $num == 6) {
                continue; //
            }

            echo "$num <br>";

            //$num++; //Criterio de parada

           /* if($num > 100) {
                break; 
            }*/

        }

        echo 'Fim do loop';


   ?>
</body>

</html>