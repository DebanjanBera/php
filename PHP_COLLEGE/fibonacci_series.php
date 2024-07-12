<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series Calculator</title>
</head>
<body>
    <h1>Fibonacci Series Calculator</h1>
    <form action="" method="post">
        <label for="terms">Enter the number of terms:</label>
        <input type="number" id="terms" name="terms" placeholder="Enter a positive integer" required>
        <input type="submit" value="Generate Fibonacci Series">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["terms"];
        $fibonacciSeries = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $nextTerm = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
            $fibonacciSeries[] = $nextTerm;
        }

        echo "<p>Fibonacci series for the first $n terms:</p>";
        echo "<ul>";
        foreach ($fibonacciSeries as $term) {
            echo "<li>$term</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
