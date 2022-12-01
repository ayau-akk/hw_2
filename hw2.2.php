<?php

$dr = mktime(0,0,0,18,04,2022); 
$now = time();

$difference =  ($dr - $now);
$days = ($difference / 86400);

echo "Осталось дней $days";


echo $difference;


?>
s