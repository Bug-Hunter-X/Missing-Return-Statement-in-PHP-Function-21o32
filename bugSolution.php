<?php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
$sum = calculateSum($numbers);
echo $sum; // Outputs 15
?> 