<?php
function generateFibonacci($n) {
    $fibonacciSequence = [];
    
    if ($n >= 1) {
        $fibonacciSequence[] = 0;
    }
    
    if ($n >= 2) {
        $fibonacciSequence[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Example usage
$n = 10;
$fibonacciSequence = generateFibonacci($n);

echo "Fibonacci sequence for n = $n: ";
echo implode(', ', $fibonacciSequence);
?>
