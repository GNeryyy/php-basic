<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Array Pesquisa</title>
</head>

<body>

   <?php 

        
        //in_array() -> TRUE ou FALSE para a existencia do que esta sendo procurado
        //array_search() -> Retorna o indice do valor pesquisado, caso ele exista         

        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        //$existe = in_array('Uva', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        //$existe = array_search('Uva', $lista_frutas);
        //null
        
        
        /*if($existe != null){
            echo 'Sim, esse valor exite no Array';
        } else {
            echo 'Não, esse valor não existe no Array';
        }*/
        
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas']);    

   ?>
</body>

</html>