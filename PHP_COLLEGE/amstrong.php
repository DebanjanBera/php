<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        $length = strlen($number);
        $number = (int)$number;

        $temp = $number;
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $length);
            $temp = (int)($temp / 10);
        }

        if ($sum == $number) {
            echo "<p>$number is an Armstrong number.</p>";
        } else {
            echo "<p>$number is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>
