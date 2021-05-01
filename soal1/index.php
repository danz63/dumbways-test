<!-- Seseorang mengendarai mobil dengan kecepatan tetap. Tepat pukul 05:25:15 pagi kecepatan masih tetap 3 m/detik. Tetapi sepuluh menit kemudian, kecepatannya dinaikkan 1m/detik sehingga kecepatan menjadi tetap 4 m/detik. Demikian 7 menit berikutnya kecepatannya selalu dinaikkan 1 m/detik. Susun algoritma untuk sampai jam tepat menunjukkan 09:00:00 pagi pada hari yang sama -->
<?php
$begin = new DateTime("2021-05-01 05:25:15");
$end = new DateTime("2021-05-01 09:00:00");
$increment = 10;
$speed = 3;
while ($begin <= $end) {
    echo $begin->format("H:i:s") . ": $speed m/detik<br>";
    $begin->modify("+$increment minutes");
    $increment = 7;
    $speed++;
}
?>