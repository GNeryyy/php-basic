<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Funções Atividade</title>
</head>

<body>

    

   <?php 

    function calcularIRPF($salario) {

        $imposto = 0;

        if($salario <= 1903.98) {
            $imposto = 0;

        } else if($salario >= 1903.99 && $salario <= 2826.65){
            $imposto = ($salario * 7.5) / 100;

        } else if($salario >= 2826.66 && $salario <= 3751.05) {
            $imposto = ($salario * 15) / 100;

        } else if($salario >= 3751.06 && $salario <= 4664.08) {
            $imposto = ($salario * 22.5) / 100;

        } else {
            $imposto = ($salario * 27.5) / 100;
        }
        return $imposto;

    
    }

    //Imprime o retorno da função passando o salário por parametro
     echo calcularIRPF(5000);

   ?>
</body>

</html>