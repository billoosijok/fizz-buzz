<?php

for( $n = 1; $n <= 100; $n ++ )
{
    if ( $n % 3 == 0 ) $output = 'Fizz';
    elseif ( $n % 5 == 0 ) $output = 'Buzz';
    else $output = $n

    echo $output, '<br>';
}
