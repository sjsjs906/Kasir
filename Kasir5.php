<?php
if ($totalharga >= 60000000) {
    $diskon = 0.1;
    $kupon = 10;
} elseif ($totalharga >= 20000000) {
    $diskon = 0.05;
    $kupon = 7;
} else {
    $diskon = 0;
    $kupon = 5;
}

$totdiskon = $totalharga * $diskon;
$totkupon = $kupon * 100;
$jumlahuang = $totalharga - $totdiskon;

echo "Anda memperoleh potongan Rp " . $totdiskon . 
     " dan total yang harus dibayar setelah diskon adalah Rp " . $jumlahuang . ".";
?>