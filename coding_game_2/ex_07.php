<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
$tot = 0;

if($a%2 == 0) {
    $tot+=$a;
}
else($tot-=$a);

if($b%2 == 0) {
    $tot+=$b;
}
else($tot-=$b);

if($c%2 == 0) {
    $tot+=$c;
}
else($tot-=$c);

echo $tot;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>