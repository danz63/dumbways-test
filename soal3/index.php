<?php
function karatekter($i = 0, $j = 0, $num)
{
    $char = "#";
    if ((($i == 0 || $i == $num - 1) && ($j == 0 || $j == $num - 1))) {
        $char = "*";
    }
    if ($j == ($num - 1) / 2 || $i == ($num - 1) / 2) {
        $char = "*";
    }
    if (($i == ($num - 1) / 2 && $j == ($num - 1) / 2)) {
        $char = "#";
    }
    return $char;
}
function drawImage($num)
{
    if ($num % 2 === 0) {
        echo "Angka Bukan Bilangan Ganjil";
        return;
    }
    echo "<table>";
    for ($i = 0; $i < $num; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $num; $j++) {
            $char = karatekter($i, $j, $num);
            echo "<td>&nbsp;$char&nbsp;</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
drawImage(11);
