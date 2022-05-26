<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="index2.js"></script>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <center>

    <h1 id="title">Calendar Basic</h1>
    <p id="title">Find the current month through a code</p>

    <form method="post" id="title">
        <label for="code">Enter one code between [1 - 12]</label><br><br>
        <select name="code" id="code">
            <option value="Select">Select</option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br><br>
        <button type="submit">Find</button>

    </form>

    <?php
        $code = $_POST['code'];
        $text = "";

        print("<br>");

        if(empty($code)){
            echo "Please, fill in correctly";
        }else{
            switch($code){
                case "Select":
                $text = "Please, fill in correctly";
                echo $text;
                break;
                
                case "1":
                $text = "You are in January";
                echo $text;
                break;
        
                case "2":
                $text = "You are in February";
                echo $text;
                break;
        
                case "3":
                $text = "You are in March";
                echo $text;
                break;
        
                case "4":
                $text = "You are in April";
                echo $text;
                break;
        
                case "5":
                $text = "You are in May";
                echo $text;
                break;
        
                case "6":
                $text = "You are in June";
                echo $text;
                break;
        
                case "7":
                $text = "You are in July";
                echo $text;
                break;
        
                case "8":
                $text = "You are in August";
                echo $text;
                break;
        
                case "9":
                $text = "You are in September";
                echo $text;
                break;
        
                case "10":
                $text = "You are in October";
                echo $text;
                break;
        
                case "11":
                $text = "You are in November";
                echo $text;
                break;
        
                case "12":
                $text = "You are in December";
                echo $text;
                break;
        
            }
        }
    ?>
    </center>
</body>
</html>