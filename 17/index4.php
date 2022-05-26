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
        <h1>Extracting the numbers</h1>
        <p>Insert elements and get only the numbers</p>

        <form method="post">
            <label for="element">Enter a elements</label><br>
            <input type="undefined" id="element" name="element"><br><br>
            <button type="submit">Only Numbers</button>
        </form>

        <?php

        print("<br>");

        $eleMent = $_POST['element'];

        function deixarNumero($string){
            return preg_replace("/[^0-9]/", "", $string);
        }

        if(empty($eleMent)){
            echo "Please, fill in the fields";
        }else{
            echo deixarNumero($eleMent);
            }

        ?>
    </center>
</body>
</html>