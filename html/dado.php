<?php
// Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
$resultado = rand(1, 6);

// Definir la ruta de la imagen según el resultado del lanzamiento
switch ($resultado) {
    case 1:
        $imagen = "dado_1.jpg";
        break;
    case 2:
        $imagen = "dado_2.jpg";
        break;
    case 3:
        $imagen = "dado_3.jpg";
        break;
    case 4:
        $imagen = "dado_4.jpg";
        break;
    case 5:
        $imagen = "dado_5.jpg";
        break;
    case 6:
        $imagen = "dado_6.jpg";
        break;
}

// Mostrar la imagen correspondiente
echo "<img src='/img/$imagen' alt='Resultado del dado'>";

// Mostrar el resultado
echo "<h1>El resultado del dado es: $resultado</h1>";
?>