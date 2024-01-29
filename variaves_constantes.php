<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP -  Variaveis Constantes</title>
</head>

<body>

   <?php 

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        // ... lógica... //

        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';
        echo BD_SENHA . '<br>';

   ?>

</body>

</html>