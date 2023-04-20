<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$x = stream_get_line(STDIN, 10000 + 1, "\n");


echo ((substr_count($x, "e")+1)+substr_count($x, "E"));

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>