<?php
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($j >= $n - 1 - $i) {
            echo '#';
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>