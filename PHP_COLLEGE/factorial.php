<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="Post">
    <p>factorial checking</p>
    <input type="number"name="number"placeholder="enter the number"/>
    <input type="submit" value="Check">

    <input type="reset" value="reset">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
    }
    $p=1;
for($i=1;$i<=$n;$i=$i+1){
    $p=$p*$i;
 
}
echo("factorila is".$p)
    ?>
</body>
</html>