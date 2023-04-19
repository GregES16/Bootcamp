<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d", $e);
    echo floor($e * 7.5 + 700)."\n";
}



// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>