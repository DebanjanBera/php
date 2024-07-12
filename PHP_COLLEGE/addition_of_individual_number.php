<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="Post">
    <p>even_odd checking</p>
    <input type="number"name="number"placeholder="enter the number"/>
    <input type="submit" value="Check">

    <input type="reset" value="reset">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
    }
    $sum=0;
    while($n!=0){
        $rem=$n%10;
        $sum=$sum+$rem;
        $n=$n/10;
    }
    echo($sum);
    ?>
</body>
</html>