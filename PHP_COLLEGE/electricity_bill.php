<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electric Bill</title>
</head>
<body>
  <form action="?" method="post">
    <input type="text" name="num" placeholder="enter bill amount"> <br>
    <input type="submit">
  </form>
  <?php
  if($_POST){
    $unit=$_POST["num"];
    $bill=0;
    if($unit<=50){
      echo "total bill is".$bill = $unit * 3.50;
    }
    elseif($unit>50 && $unit<=150){
      echo "total bill is". $bill = (50 * 3.50) + (($unit - 50) * 4.00);
    }
    elseif($unit>150 && $unit<=250){
      echo "total bill is". $bill = (50 * 3.50) + (100*4.00) + (($unit - 150) * 5.20);
    }
    else{
      echo "total bill is".  $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($unit - 250) * 6.50);
    }
  }
  ?>
</body>
</html>