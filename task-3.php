<?php
/**
 * Task 3: Break on Condition
 * Write a PHP program that calculates and prints the first 10 Fibonacci numbers. 
 * But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
 */
function fibonacci($n){
  $num1 = 0;
  $num2 = 1;

  for ($i=0; $i < $n; $i++) { 
    echo $num1."\n";
      $num3 = $num2 + $num1;
      $num1 = $num2;
      $num2 = $num3;
      if ($num1 > 100) {
        break;
      }
  }
}
fibonacci(10);