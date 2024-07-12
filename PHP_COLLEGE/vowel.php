<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <h2>Enter your name:</h2>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" name="submit" value="Count Vowels">
    </form>

    <?php
    if(isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $vowels = array('a', 'e', 'i', 'o', 'u');
            $totalVowels = 0;
            $vowelIndices = array();

            // Convert name to lowercase for case-insensitive comparison
            $nameLower = strtolower($name);

            // Loop through each character of the name
            for($i = 0; $i < strlen($nameLower); $i++) {
                // Check if the character is a vowel
                if(in_array($nameLower[$i], $vowels)) {
                    echo"<p> vowels are: ($nameLower[$i])</p>";
                    $totalVowels++; // Increment total count of vowels
                    $vowelIndices[] = $i; // Store index of vowel
                }
            }

            // Display total count of vowels and their indices
            echo "<p>Total vowels in your name: $totalVowels</p>";
            
            if($totalVowels > 0){
                echo "<p>Indices of vowels: ";
                foreach($vowelIndices as $index){
                    echo "$index, ";
                }
                echo "</p>";
            }
        }
    }
    ?>
</body>
</html>
