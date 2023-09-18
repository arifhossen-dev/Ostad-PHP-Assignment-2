<?php
/**
 * Task 1: Looping with Increment using a Function
 * Write a PHP function that uses 
 * a for loop to print all even numbers
 * from 1 to 20, but with a tep of 2. 
 * In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
 * The function should take the arguments like start as 1, end as 20 and step as 2. 
 * You must call the function to print. 
 * Also do the same using while loop and do-while loop also.
 */
// using for loop
 function getEvenNumbersUsingFor($start,$end,$step) {
  if ($start < $end) {

    for ($i=$start; $i <= $end; $i++) { 
      if($i % $step === 0){
        echo "$i \n";
      }
    }
  }
 }

 // using while loop
 function getEvenNumbersUsingWhile($start,$end,$step) {
  if ($start < $end) {
    $counter = $start;
    while ($counter <= $end) {
      if($counter % $step === 0){
        echo "$counter \n";
      }
      $counter++;
    }
  }
 }

 // using do while loop
 function getEvenNumbersUsingDoWhile($start,$end,$step) {
  if ($start < $end) {
    $counter = $start;
    do {
      if($counter % $step === 0){
        echo "$counter \n";
      }
      $counter++;
    }while ($counter <= $end);
  }
 }

 $start = 1;
 $end = 20;
 $step = 2;

  echo getEvenNumbersUsingFor($start,$end,$step);
  echo getEvenNumbersUsingWhile($start,$end,$step);
  echo getEvenNumbersUsingDoWhile($start,$end,$step);