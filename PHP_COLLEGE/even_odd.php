<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
        <input type="number" name="number" placeholder="Enter your number">
        <input type="submit"name="submit" value="check">
        <input type="reset"name="reset" value="reset">

    </form>
    <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['number'])){
                $number = $_POST['number'];
                if($number%2==0){
                    echo"This is an even number";
                }
                else{
                    echo"This is an odd number";
                }
            }

        }
    ?>
</body>
</html>