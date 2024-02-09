<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Funções</title>
</head>

<body>
   <?php 
    //void(Sem retorno)
    function exibirBoasVindas() {
        echo "Boas Vintas Macaco <br>";
    }

    exibirBoasVindas();

    //return (com retorno)

    function calcularAreaTerreno($largura, $comprimento) {

        $area = $largura * $comprimento;

        return $area;
    }

     echo calcularAreaTerreno(5, 50);

   ?>
</body>

</html>