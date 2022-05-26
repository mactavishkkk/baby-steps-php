<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <center>
        <h1>Extracting the triple of numbers</h1>

        <?php
        function multArray($numeros) {  
            $triplo = [];
        
            for($i = 0; $i < count($numeros); $i++){
                $triplo[] = $numeros[$i] * 3;
            }
        
            return $triplo;
        }
        
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8];
        $triplo = multArray($numeros);
        print_r($numeros);
        print("<br>");
        print_r($triplo);

        ?>

    </center>

</body>
</html>