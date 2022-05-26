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
        <h1>Extracting the numbers pairs</h1>

        <?php
        function filtraArray($numeros) {  
            $pares = [];
        
            for($i = 0; $i < count($numeros); $i++){
              if ($numeros[$i] % 2  == 0) {
                $pares[] = $numeros[$i];
              }
            }
        
            return $pares;
        }
        
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8];
        $pares = filtraArray($numeros);
        //print_r($pares);
        print_r($numeros);
        print("<br>");
        print_r($pares);

        ?>

    </center>

</body>
</html>