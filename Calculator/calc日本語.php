<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PHP 電卓（でんたく）</h1>

    <form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator" >
    <option>None</option>
    <option>足す（たす） +</option>
    <option>引いて（ひいて） -</option>
    <option>掛ける（かける） *</option>
    <option>割る（わる） /</option>
    </select><br>
    <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
    <p>
    Answer:
    <?php 
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator){
            case "None":
                echo "You need to select a method";
                break;
            case "足す（たす） +":
                echo $result1 + $result2;
                break;
            case "引いて（ひいて） -":
                echo $result1 - $result2;
                break;
            case "掛ける（かける） *":
                echo $result1 * $result2;
                break;
            case "割る（わる） /":
                echo $result1 / $result2;
                break;
        }

    }
    ?>
    </p>
</body>
</html>