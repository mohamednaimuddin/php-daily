<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Find the largest number among three</h1>
    <form method="POST">
        <label>Enter the first number:  </label>
        <input type="number" name="num1" required>
        <label>Enter the second number: </label>
        <input type="number" name="num2" required>
        <label>Enter the third number: </label>
        <input type="number" name="num3" required> 
        <button type="submit" name="find">Find Largest</button>
    </form>

    <?php
    if(isset($_POST['find'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        echo "<h2> Number 1: ".$num1."</h2>";
        echo "<h2> Number 2: ".$num2."</h2>";
        echo "<h2> Number 3: ".$num3."</h2>";

        if($num1 == $num2 && $num1 == $num3){
            echo "<h2> All three numbers are equal: ".$num1."</h2>";
        }else{
            if($num1 >= $num2 && $num1 >= $num3){
            echo "<h2> The largest  number is: ".$num1."</h2>";
            }
            elseif($num2 >= $num1 && $num2 >=$num3){
                echo "<h2> The largest number is: ".$num2."</h2>";
            }
            else{
                echo "<h2> The largest number is: ".$num3."</h2>";
            }
        }
        
    }
    ?>
</body>
</html>