<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
fscanf(STDIN, "%d", $d);

echo max($a, $b, $c, $d) - min($a, $b, $c, $d); 

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


?>