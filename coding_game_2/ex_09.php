<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$S = stream_get_line(STDIN, 9 + 1, "\n");

echo "(".$S[0-2].") ".$S[3-5]."-".$S[6-10];

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>