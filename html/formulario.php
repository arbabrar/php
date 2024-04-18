<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        if(isset($_GET['texto'])){
            $text= $_GET['texto'];
            echo "El texto era $text <br>";
        }else{
            echo "<form method='get' action=''>
            <label for='texto'>Introduce el texto</label>
            <input type='text' placeholder='texto' name='texto' id='texto'/>
            <input type='submit' value='Enviar'/></form>";
        }
    ?>
    
</body>
</html>