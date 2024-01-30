<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - IF-ELSE-LOGICOS</title>
</head>

<body>

   <?php 
        //Operadores condicionais/comparação

        // == - Igual
        // === - Identico
        # != ou <> - Diferente
        # !== - Não indenticos
        // < - Menor
        // > - Maior
        // <= - Menor ou igual
        // >= - Maior ou igual

        //Operadores lógicos

        //E: && ou AND -> Retorna verdadeiro se TODOS os resultados das expressoes for verdadeiro
        //OU: || ou OR -> Retorna verdadeiro se PELO MENOS UM dos resultados das expressoes for verdadeiro
        //XOR: XOR -> Retorna verdadeiro se uma das expressoes for verdadeiro e a outra falsa e vice-versa.
        #! -> Inverte o resultados retornado pela expressação

        if (5 == 5 && 10 > 5 && 5 != 7){
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        
        
        

   ?>

</body>

</html>