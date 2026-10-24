<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Php calculator</title>
    <link rel='stylesheet' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body class="container">
    <h2> Simple calculator</h2>

    <form class="form-group" method="POST">
        <label class = "form-label">Enter your first number : </label>
        <input type ="number" name="num1" step="any" required>

        <label class = "form-label">Choose operator : </label>
        <select  name="operator" required>
            <option value = "+">+</option>
            <option value = "-">-</option>
            <option value = "*">*</option>
            <option value = "/">/</option>
        </select>

        <label class = "form-label">Enter you second number : </label>
        <input type="number" name="num2" step="any" required>

        <button type="submit" name="calculate">Calculate</button>
    </form>

<?php
if (isset($_POST['calculate'])){
    $num1 = (float) $_POST['num1'];
    $operator = $_POST['operator'];
    $num2 = (float) $_POST['num2'];

    if ($operator == "+"){
        echo"<h3> Result :".($num1 + $num2). "</h3>";
    }
    elseif($operator == '-'){
        echo "<h3> Result : ".($num1 - $num2). " </h3>";
    }
    elseif($operator == '*'){
        echo "<h3> Result : ".($num1*$num2). "</h3>";
    }
    elseif($operator == '/'){
        if($num2 == "0"){
            echo "<h3> cannot divided by zero </h3>";
        } else{
            echo "<h3> Result :".($num1/$num2). "</h3>";
        }
    }else{
        echo "<h3>Invalid Operator</h3>";
    }
}

?>
</body>
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
<script type="importmap">
{
  "imports": {
    "@floating-ui/dom": "https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.7.6/dist/floating-ui.dom.esm.min.js",
    "vanilla-calendar-pro": "https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@3.4.0/index.mjs"
  }
}
</script>
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.min.js" integrity="sha384-BJf/nQgxZJU68GxBse97Vdlc8Rh+z9PzzXiS3/BjV+1nQPR7IKn+iJnD3DJvCMaU" crossorigin="anonymous"></script>
</html>