<?php

$start = 5;
for ($i = 1; $i <= $start; $i++) {
    for ($j = 1; $j <= 8; $j++) {
        if ($j == $i + 1 || $j == $i + 2) {
            echo ('*');
        } else {
            echo ($j);
        }
    }
    echo '<br>';
}
