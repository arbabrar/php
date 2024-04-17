<?php
    $a = 3.75;
    $b = 18;
    $c = "mi casa";
    ob_start();
    var_dump( $a);
    $tipo =ob_get_clean();
    print_r("El tipo de dato de a es $tipo");
    echo "El tipo de dato de a es "; var_dump($a);
    
    
    
    
?>