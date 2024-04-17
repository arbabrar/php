<?php
// Generar un número aleatorio entre 0 y 1 para simular el lanzamiento de una moneda
$resultado = rand(0, 1);

// Definir la ruta de la imagen según el resultado del lanzamiento
$imagen = ($resultado == 0) ? "cara.svg" : "cruz.svg";

// Mostrar la imagen correspondiente
echo "<img src='/img/$imagen' alt='Resultado de la moneda'>";

// Mostrar el resultado
echo ($resultado == 0) ? "<h1>¡Es cara!</h1>" : "<h1>¡Es cruz!</h1>";
