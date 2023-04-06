<?php

function teacher() {
    echo "I am a Teacher \n";
}

function student($name = "Riddick") {
    echo "I am a student and my name is $name \n";
}

$func_teacher = "teacher";
$func_student = "student";

$func_teacher();
$func_student("Mark");

?>