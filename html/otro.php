<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <?php
        $arreglo = [];
        for ($i=0; $i < 10 ; $i++) { 
            $arreglo[$i] = rand(0,10);
        }
        foreach($arreglo as $a){
            switch ($a) {
                case 0 :
                case 1 :
                case 2 :
                case 3 :
                case 4 :
                    echo "<h1>$a -Insuficiente</h1>\n";
                    break;
                case 5:
                    echo "<h1>$a -Suficiente</h1>\n";
                    break; 
                case 6:
                    echo "<h1>$a -Bien</h1>\n";
                    break;
                case 7:  
                case 8:
                    echo "<h1>$a -Notable</h1>\n";
                    break;  
                case 9:
                case 10:
                    echo "<h1>$a -Sobresaliente</h1>\n";
                    break;  
                    
            }
        }
    ?>
</body>
</html>
    