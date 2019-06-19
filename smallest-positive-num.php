<?php 
// Find the smallest positive number missing from an unsorted array

/**
 * Write a function:
 * function solution($A);
 * that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in
 * A.
 * For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5. Given A = [1, 2, 3], the function should
 * return 4.
 * Given A = [−1, −3], the function should return 1.
 * Write an efficient algorithm for the following
 * assumptions: N is an integer within the range [1..100,000];
 * each element of array A is an integer within the range
 * [−1,000,000..1,000,000].
 */

function solution($A) {
  sort($A);
  $eA = end($A);
  if($eA < 0)
    return 1;
  for($i = 0; $i < $eA; $i++)
    if($i > 0 && !in_array($i, $A))
      return $i;

  return $eA + 1;
}

//$A = [2,4,-100,-1, -3,3,1];
$A = [-1, -4, 3, 1, 4, 2, 5, 9];
var_dump(solution($A));
