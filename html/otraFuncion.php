<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombres = array(
            "Sofía", "Alejandro", "Valentina", "Sebastián", "Camila",
            "Martín", "Isabella", "Mateo", "Luciana", "Nicolás",
            "Emma", "Juan", "Valeria", "Santiago", "Ana",
            "Diego", "Mariana", "Lucas", "Gabriela", "Andrés"
        );
        
        
       $apellidos = array(
            "García", "Rodríguez", "Martínez", "López", "González",
            "Hernández", "Pérez", "Sánchez", "Ramírez", "Torres",
            "Flores", "Gómez", "Díaz", "Vásquez", "Romero",
            "Suárez", "Castro", "Morales", "Ortega", "Ruiz"
        );
        function genernombre ($cant){
            global $nombres,$apellidos;
            $n_c=[];
            for ($i = 0; $i < $cant; $i++){
                $n_c[$i]=  $nombres[rand(0,count($nombres)-1)]." ".$apellidos[rand(0,count($apellidos)-1)] ;
            }
            return $n_c;
        }
        print_r(genernombre (10));

    ?>
</body>
</html>