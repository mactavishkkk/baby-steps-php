<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
    <script src="index1.js"></script>
</head>
<body>

    <center>
        <h1>Tablet Basic</h1>
        <p>Enter a number and its operation corresponding to the</p>

        <form method="post">
            <label for="n1">Value</label><br>
            <input type="number" id="n1" name="n1"><br><br>
            <select name="ope" id="ope">
                <option value="+">Sum</option>
                <option value="-">Sub</option>
                <option value="*">Mult</option>
                <option value="/">Div</option>
            </select><br><br>
            <button type="submit">Display</button>
        </form>

        <?php
            print("<br>");

            $numx = $_POST['n1'];
            $numo = $_POST['ope'];
            $result = "";

            if(empty($numx) or empty($numo)){
                echo "Please, fill in correctly";
            }else{
                
                print("Tablet of $numx ");
                print("<br>");
                print("<br>");

                for ($numi = 1; $numi <= 10; $numi++){
                    switch($numo){
                        case "+":
                            $result = $numx + $numi;
                            echo $numx . " + " . $numi . " = " . $result . "<br>";
                        break;
                        case "-":
                            $result = ($numx + $numi) - $numx;
                            echo ($numx + $numi) . " - " . $numx . " = " . $result . "<br>";
                        break;
                        case "*":
                            $result = $numx * $numi;
                            echo $numx . " * " . $numi . " = " . $result . "<br>";
                        break;
                        case "/":
                            $result = ($numx * $numi) / $numx;
                            echo ($numx * $numi) . " / " . $numx . " = " . $result . "<br>";
                        break;
                    }
                }
            }
        ?>
    </center>

</body>
</html>