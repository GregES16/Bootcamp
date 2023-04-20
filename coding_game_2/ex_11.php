<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$sum = 0;
for($i = 2; $i <= $N; $i+=2) {
    $sum += $i;
}
// var_dump($sum);
echo $sum;

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


?>