<?php

function calculateMonthlyPayment($principal, $numMonth, $rate) {
  $r = $rate / 100 / 12;
  $onePlusRN = pow((1 + $r), $numMonth);

  return $principal * $r * $onePlusRN / ($onePlusRN - 1);
}

function calculateTotalPayment($principal, $numMonth, $rate) {
  return $numMonth * calculateMonthlyPayment($principal, $numMonth, $rate);
}

function calculateTotalInterest($principal, $numMonth, $rate) {
  return calculateTotalPayment($principal, $numMonth, $rate) - $principal;
}

?>