<?php
    function fizzBuzz($number) {
        switch (true) {
            case $number % 3 === 0 && $number % 5 === 0:
                return 'FizzBuzz';
                break;

            case $number % 3 === 0:
                return 'Fizz';
                break;

            case $number % 5 === 0:
                return 'Buzz';
                break;
            
            default:
                return $number;
                break;
        }
    }
    for ($i = 1; $i <= 100; $i++) {
        echo fizzBuzz($i);
        echo '<br>';
    }

    echo '<br>';

    $k = 0;
    $count = 0;
    for ($i = 1; $i <= 10000; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $k += 1;
            }
        }
            if($k == 2) {
            echo $i.' ';
            echo '<br>';
            $count += 1;
            }
            $k = 0;
        }

    echo '<br>';

    $array = [ ['山田',25,'女性'], ['鈴木',32,'男性'], ['高橋',16,'女性'] ];
 
    foreach($array as $vals){
        echo $vals[0].'('.$vals[1].'歳'.$vals[2].')';
        echo '<br>';
    }
?>