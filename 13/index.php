<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13</title>
    <script src="index.js"></script>
</head>
<body>
    <center>

        <h1>Calculator Basic</h1>
        <p>Ente the values to be calculated</p>

        <form method="post">
            <label for="n1">First value</label><br>
            <input type="number" id="n1" name="n1"><br>
            <label for="op">Select this operation:</label><br>
            <select name="op" id="op">
                <option value="Select"></option>
                <option value="+">Sum ( + )</option>
                <option value="-">Sub ( - )</option>
                <option value="*">Mult ( * )</option>
                <option value="/">Div ( / )</option>
            </select><br>
            <label for="n2">Second value</label><br>
            <input type="number" id="n2" name="n2"><br><br>
            <button type="submit">Calc.</button>
        </form>
<?php
    print("<br>");

    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $op = $_POST['op'];

    switch($op){
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
    }
    
        if(empty($num1) or empty($num2) or empty($op)){
            echo "Please, fill in the fields";
        }else{
            echo $result;
        }

?>
      
    </center>
</body>
</html>