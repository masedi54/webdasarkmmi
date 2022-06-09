<?php

$area = 88;

if ($area > 350) {
    $ongkir = "Rp. 150.000";
} elseif($area > 250){
    $ongkir = "Rp. 120.000";
} elseif($area > 200){
    $ongkir = "Rp. 105.000";
} elseif($area > 60){
    $ongkir = "Rp. 90.000";
} elseif($area > 20){
    $ongkir = "Rp. 75.000";
} elseif($area > 8){
    $ongkir = "Rp. 60.000";
} elseif($area > 4){
    $ongkir = "Rp. 45.000";
} elseif($area > 2){
    $ongkir = "Rp. 30.000";
} else {
    $ongkir = "Rp. 15.000";
}

echo "Area anda   : $area km <br>";
echo "Ongkir      : $ongkir";

?>