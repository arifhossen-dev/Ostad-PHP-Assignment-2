<?php
/**
 * Task 4: Fibonacci Series printing using a Function
 * Write a PHP function to print the first 15 numbers in the Fibonacci series. 
 * You should take this 15 as an argument of a function 
 * and use a for loop to generate these numbers 
 * and print them by calling the function.
 */
function fibonacci($n){
  $num1 = 0;
  $num2 = 1;

  for ($i=0; $i < $n; $i++) { 
    echo $num1."\n";
      $num3 = $num2 + $num1;
      $num1 = $num2;
      $num2 = $num3;
  }
}
fibonacci(15);