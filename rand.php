<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of Roll</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Result of your roll:</h1>
    
    <?php
        // Check if form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the values from the form
            $num_dice = $_POST["input_box"];
            $num_sides = $_POST["select_box"];
            
            // Create an array to store results
            $results = array(); 
            
            // Loop to generate random rolls
            for ($i = 0; $i < $num_dice; $i++) {
                $roll = rand(1, $num_sides);
                array_push($results, $roll);
            }

            // Display the results
          
            echo "<p class ='centered'>You rolled: " . implode(", ", $results) . "</p>";
            
        }
    ?>

    </div>
</body>
</html>
