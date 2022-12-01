<?php

$dr = mktime(0,0,0,01,01,2023); 
$now = time();

$difference =  ($dr - $now);
$days = ($difference / 86400);

echo "Осталось дней $days";


echo $difference;


?>
