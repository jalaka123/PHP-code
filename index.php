<?php

function generatePattern($number) {
    $pattern = "";
    
    switch ($number) {
        case 1:
            $pattern = "*   *\n*   *\n*****\n*   *\n*   *\n";
            break;
        case 2:
            $pattern = "**   **\n**   **\n*****\n*****\n**  **\n**  **\n";
            break;
        case 3:
            $pattern = "***  ***\n***  ***\n***  ***\n*****\n*****\n*****\n***  ***\n***  ***\n***  ***\n";
            break;
        default:
            $pattern = "Invalid number. Please choose a number between 1 and 3.";
            break;
    }
    
    return $pattern;
}

// Test the function with different numbers
$number = 3;
$pattern = generatePattern($number);
echo "Pattern for number $number:\n";
echo $pattern;
?>
