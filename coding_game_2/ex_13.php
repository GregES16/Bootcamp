<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s", $byte);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo (substr_count($byte, "1")*2);
