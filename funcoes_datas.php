<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Funções de Datas</title>
</head>

<body>

   <?php 

    /*
    //recuperação da data atual / data corrente 
    echo date('d/m/y H:i ');

    //~
    echo '<br>';
    echo date_default_timezone_get();
    date_default_timezone_set('America/Sao_paulo');
    echo '<br>';
    echo date('Y-m-d H:i');
    */

    $data_inicial = '2024-02-15';
    $data_final = '2024-03-20';

    //timestamp
    //01/01/1970 -- 2024-02-15 (JS -> Milisegundos / PHP -> Segundos)

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);


    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br>';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = abs($time_final - $time_inicial);

    echo '<br>';

    echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times;

    $segundos_existem_dia = 24 * 60 * 60;

    echo '<br>';

    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

    echo '<br>';

    echo 'A diferenca em dias é: '. $diferenca_de_dias_entre_as_datas;

   ?>
</body>

</html>