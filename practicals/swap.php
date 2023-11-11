<?php
function swapNumbers($num1, $num2) {
    echo "Before swapping: ";
    echo "Number 1 = $num1, Number 2 = $num2\n";

    // Swapping logic
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "After swapping: ";
    echo "Number 1 = $num1, Number 2 = $num2\n";
}

// Example usage
$number1 = 5;
$number2 = 10;

swapNumbers($number1, $number2);
?>
