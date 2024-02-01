<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Praticando</title>
</head>

<body>

   <?php 

        $idade = 10;
        $peso = 55;

        if($idade >= 16 && $idade <= 69 && $peso >= 50){

            echo 'Atendi aos requisidos';

        } else {

            echo 'Não atendi aos requisidos';
            
        }

       


         
   ?>

    <h1 style="text-align: center;">Doação de Sangue</h1>
    
    <p> Qual a sua idade ?
    <?php
        if ($idade) {
            echo 'Atendi aos requisidos';
        } else {
            echo 'Não atendi aos requisidos';
        }
        ?> 

    </p>

    
    <p> Qual a seu peso ?
    <?php
        if ($peso) {
            echo 'Atendi aos requisidos';
        } else {
            echo 'Não atendi aos requisidos';
        }
        ?> 

    </p>
    


</body>

</html>