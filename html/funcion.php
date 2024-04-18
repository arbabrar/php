<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion</title>
</head>
<body>
    <?php
        /*Escribe una función llamada inicializar_array que reciba tres parámetros llamados numero_de_elementos
        , min y max, y que devuelva un array de números enteros comprendidos entre los valores min y max.
        El número de elementos que contiene el array será el especificado en el parámetro de entrada
        <numero_de_elementos></numero_de_elementos*/
        GLOBAL $numeros;
        function inicializar_array($numero,$min,$max){
            global $numeros;
            for($i = 0;$i < $numero; $i++)
            {
                  $numeros[]=rand($min,$max);
            }
            //return $arr;
            
        }
        //print_r(inicializar_array(6,21,30));
        inicializar_array(6,21,30);
        print_r($numeros);
    ?>
</body>
</html>