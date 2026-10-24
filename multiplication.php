<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="POST">
        <label>Enter a number: </label>
        <input type="number" name="number" required>
        <button type="submit" name="generate">Generate Table</button>
    </form>
    <?php
    if(isset($_POST['generate'])){
        $number = (int) $_POST['number'];
        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table border='1'>";
        for($i = 1; $i <= 10; $i++){
            echo "<tr><td>$number x $i = ".($number*$i)."</td></tr>";
        }
        echo "</table>";
    }
    
    ?>
</body>
</html>