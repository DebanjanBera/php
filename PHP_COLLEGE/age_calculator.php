<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="date" name="date" placeholder="enter your date of birth"/>
        <input type="submit" value="submit">
    </form>
    <?php
    if($_POST){
        $dob=$_POST["date"];
        $today=date("d/m/Y");
        echo "Today's date: " . $today . "<br>";
        $dob_parts = explode('/', $dob);
        $today_parts = explode('/', $today);

        $age1 = $today_parts[2] - $dob_parts[2];
        $age2 = $today_parts[1] - $dob_parts[1];
        $age3 = $today_parts[0] - $dob_parts[0];
        echo "Your age is: " . $age1 . " years ".$age2."month".$age3."day" ;
    }
    ?>
    </body>
</html>
