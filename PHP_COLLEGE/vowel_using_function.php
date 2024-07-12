<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="" method="post">
        <input type="text" name="name" placeholder="enter your name">
        <input type="submit" name="submit">

</form>
<?php
if(isset($_POST)){
    $var=$_POST['name'];
    $l=strtolower($var);
    countvowel($l);
}
function countvowel($l){
    $vowel=array("a","e","i","o","u");
    $count=0;


    for ($i=0;$i<strlen($l);$i++){
        if(in_array($l[$i],$vowel)){
            $count+=1;
        echo"<br>";
        echo"vowels are: $l[$i] <br>";
        echo"index number is: $i<br>";


        }
    }
    echo"total vowels are:$count";
}


   
?>




</body>
</html>