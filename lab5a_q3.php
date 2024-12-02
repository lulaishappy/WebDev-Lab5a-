<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length; // Calculate and return the area
        }

        // Example values for width and length
        $width = 5; // can change this to any value
        $length = 3; // can change this to any value

        // Calculate the area by calling the function
        $area = calculateArea($width, $length);

        // Display the result
        echo "The area of a rectangle with a width of $width and $length is $area.";
    ?>
</body>
</html>
