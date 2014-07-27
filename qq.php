<?php
$a = "66";
$b = "55";

function Sum()
{
    global $a, $b;

    $b = "Dfdsfsdf";
}

Sum();
echo $b;