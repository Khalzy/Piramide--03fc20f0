<?php




$vraag = readline("hoeveel stapels wil je hebben?");
$r = "";

for ($i = 1; $i <= $vraag; $i++) {
    $r  .= "*";
    echo ($r . "\n");
}


