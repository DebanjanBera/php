<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?"method="POST">
        <input type="number"name ="number1"placeholder="Enter the first number">
        <br>
        <input type="number"name ="number2"placeholder="Enter the second number">

        <input type="submit"value="submit">
    </form>
    <?php
    $tem=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $tem=$number1;
        $number1=$number2;
        $number2=$tem;
        echo("After swapping the first number is".$number1);
        echo"<br>";
        echo("After swapping the first number is".$number2);
    }
    ?>
</body>
</html>