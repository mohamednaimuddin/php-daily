<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="POST">
        <h3>Enter you score ( 0 - 100 )</h3>
        <label>Enter your score : </label>
        <input type="number" name="score" required>
        <button type="submit" name="calculate">Show Grade</button>
    </form>
    <?php
    if(isset($_POST['calculate'])){
        $score = (float) $_POST['score'];

        if($score >= 90 && $score <= 100){
            echo "<h3> Your grade is A </h3>";
        }
        elseif($score >= 80 && $score < 90){
            echo "<h3> Your grade is B </h3>";
        }
        elseif($score >= 70 && $score < 80){
            echo "<h3> Your grade is C </h3>";
        }
        elseif($score >= 60 && $score < 70){
            echo "<h3> Your grade is D </h3>";
        }
        else{
            echo "<h3> Your grade is F </h3>";
        }
    }
    ?>
</body>
</html>