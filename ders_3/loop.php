<?php

for ( $a = 1, $b = 5, $c = 6; $a <= 5, $b >= 1, $c <= 10; ++$a, $b--, $c++ ) {
    echo $a . '-' . $b . '-' . $c . PHP_EOL;
}