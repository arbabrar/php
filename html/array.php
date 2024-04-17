<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $arreglo =array ("Juan"=>"0","Maria"=>"0","Pedro"=>"0","Jose"=>"","Luis"=>"0");
    foreach($arreglo as $k=>$v){
        do{
            $edad = rand(20, 80);
        }while($edad % 2 == 0);

        $arreglo[$k]=$edad;
        //array_replace(,array($k => $edad));
        //$v=$edad;
    }
    foreach($arreglo as $k=>$v){
        echo    " ".$k." ".$v." <br>\n";
    }
    

    ?>
    
</body>
</html>