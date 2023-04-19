<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$str = stream_get_line(STDIN, 1999 + 1, "\n");
// echo str_repeat(substr($str, 0, 2), 3);
$n = substr($str,0, 2);
echo str_repeat($n, 3);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>