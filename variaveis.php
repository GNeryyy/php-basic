<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Variaveis</title>
</head>

<body>
   <?php 
        
        //string
        $nome = 'Gabriel';

        //int
        $idade = 21;

        //float
        $peso = 90.5;

        //boolean
        $fumante_sn = true; //(true = 1) ou false

        //... lógica ...

        $idade = 22;

   ?>

   <h1>Ficha cadastral</h1>

    <br>

    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>

</html>