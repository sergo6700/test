<?php
    // Задача 1.
    $haystack = [1,4,5,78,90];
    $needle = 25;
    usort($haystack, function($a, $b) use ($needle) {
        return abs($needle - $a) <=> abs($needle - $b);
    });
    $closest = reset($haystack);
    print("Задача 1. " .$closest);
?>
