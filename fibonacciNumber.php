<?php

function FIBONACCI($n)
{
    if ($n == 0) {
        return 1;
    } elseif ($n == 1) {
        return 1;
    } else {
        return FIBONACCI($n - 1) + FIBONACCI($n - 2);
    }
}

for ($i = 1 ; $i < 10; $i++) {
    echo FIBONACCI($i) . " ";
}

?>
