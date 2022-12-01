<?php
	$rand = rand(10,100);
   $a = time() + 3600 * 24 * $rand; 
   
   echo ($rand).'<br>' ;
   echo date('d.m.Y H:i:s', $a);
?>
