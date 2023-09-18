<?php
/**
 * Task 2: Skip Multiples of 5
 * Create a PHP script that prints numbers from 1 to 50 using a for loop. 
 * However, when the loop encounters a multiple of 5, 
 * it should skip that number using the continue statement 
 * and continue to the next iteration.
 */
function printNumbers($n) {
  for ($i=0; $i <= $n; $i++) { 
    if ($i % 5 === 0) {
      continue;
    }
    echo "$i \n";
  }
}

printNumbers(50);