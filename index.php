<?php

/*
$input = 1;
// Primes Detector
function is_prime(int $n) : string
{
    $factors = [];
    for ($i = 1; $i <= $n; $i++){
        if ($n % $i == 0) {
            $factors[] = $i;
        }
    }

    foreach ($factors as $factor) {
        $factors[] = $factor * -1;
    }

    if (count($factors) != 4){
        return "<h1>The number $n is not prime!</h1>";
    } elseif (count($factors) == 4) {
        return "<h1>The number $n is prime!</h1>";
    }
}

echo is_prime($input);
*/

// Primes Generator
$start = 2000;
$end = 5000;
function prime_generator($start_count, $end_count) {
    $primes = [];
    $numbers = [];
    $factor_set = [];
    
    for ($i = $start_count; $i <= $end_count; $i++) {
        $numbers[] = $i;
    }
    
    foreach ($numbers as $number) {
        $factors = [];
        for ($j = 1; $j <= $number; $j++) {
            if ($number % $j == 0) {
                $factors[] = $j;
                $factors[] = (-1 * $j);
            }
        }

        $factor_set[] = $factors;
    }

    foreach ($factor_set as $factors) {
         if (count($factors) === 4){
        $primes[] = max($factors);
    }
    }

    $concat = "";

    foreach ($primes as $prime) {
        $concat .= ($prime . ", ");
    }
    return "Primes between $start_count and $end_count are: $concat";
}

echo prime_generator($start, $end);