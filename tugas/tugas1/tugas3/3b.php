<?php

function urutanangka($angka)
{
    $num = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num++;
        }
        echo "<br>";
    }
}
echo urutanangka(5);