<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $M);
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
$sum = 0;
for ($i = 0; $i < $N; $i++)
{
    $E = intval($inputs[$i]);
    $sum += $E%$M;
}

echo $sum;
?>