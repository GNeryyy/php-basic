<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - False, Null, empty</title>
</head>

<body>

   <?php 

        //false (true/false) - tipo variable boolean
        //null e empty -valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variable null';
        } else {
            echo 'Não, a variable no é null';
        }
         
        echo '<br>';

        if(is_null($funcionario2)) {
            echo 'Sim, a variable null';
        } else {
            echo 'Não, a variable não esta vazia';
        }

        //valores vazios ?

        if(empty($funcionario1)) {
            echo 'Sim, a variable está vazia';
        } else {
            echo 'Não, a variable não é null';
        }

        if(empty($funcionario2)) {
            echo 'Sim, a variable está vazia';
        } else {
            echo 'Não, a variable não esta vazia';
        }
            

   ?>
</body>

</html>