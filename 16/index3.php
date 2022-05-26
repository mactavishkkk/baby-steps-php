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

        <h1>Mirror Basic</h1>
        <p>See the inverse value of the value that was entered</p>

        <form method="post">
            <label for="valor">Enter one fo values [Boolean or Number]</label><br><br>
            <input type="undefined" name="valor" id="valor"><br><br>
            <button type="Submit">Inverse</button>
        </form>

        <?php
            print("<br>");

            $valor = $_POST['valor'];

            if(empty($valor)){
                echo "Please, fill in the fields";
            }else{
                switch($valor){
                    case "True":
                        $result = "False";
                        echo $result;
                    break;
                    case "False":
                        $result = "True";
                        echo $result;
                    break;
                    case $valor:
                        $result = $valor - $valor - $valor;
                        echo $result;
                    break;
            }
        }

        ?>

    </center>   
</body>
</html>