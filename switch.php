<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Switch</title>
</head>

<body>

   <?php 

        $parametro = false;

        
        switch ($parametro) {

            case 1 :
                echo 'Entrou na case 1';
                break;

            case 'abc' :
                echo 'Entrou na case 2';
                break;

            case false:
                echo 'Entrou na case 3';
                break;     
                
            default : 
                echo 'Entrou no defalt';
                break;

        }
        
        

   ?>

</body>

</html>