<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
</head>
<center>
    <h2>Form Basic in PHP</h2>
    <p>Fill in correctly</p>

    <form method="post">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        print("<br>");

        $nome = $_POST['fname'];
        $sobreNome = $_POST['lname'];
        $result = "Hello $nome $sobreNome !";

        if(empty($nome) or empty($sobreNome)){
            echo "Please, fill in the fields";
        }else{
            echo $result;
        }
    ?>
</center>

</body>
</html>