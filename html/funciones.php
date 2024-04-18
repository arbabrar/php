<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr= array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "
        Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "
        Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "
        Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "
        Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
        Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
        Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"
        Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
        //$n =rand(0, count($arr));
        ksort($arr);
        $arr=array_change_key_case($arr, CASE_UPPER);
        foreach($arr as $k => $v){
            $arr[$k] =strtoupper($v);
        }
        $pais = array_rand($arr);
        echo "La capital de $pais es $arr[$pais]";
            
    ?>
</body>
</html>
