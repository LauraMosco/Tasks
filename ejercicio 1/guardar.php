<?php
	require 'calculo.php';

	$arr= array ($p=$_POST['p'],
	$pa=$_POST['pa'],
	$pp=$_POST['pp']);

	$Polloarroz = new Calculo();

	$ca=$Polloarroz->c1($arr);
	$cp=$Polloarroz->c2($arr);
	$cta=$Polloarroz->c3($ca, $arr);
	$ctp=$Polloarroz->cc3($cp, $arr);
	$ctt=$Polloarroz->c4($cta, $ctp);

			echo "Cantidad de pollo: ".$cp."<br>";
			echo "Cantidad de arroz: ".$ca."<br>";
			echo "Costo del pollo: ".$ctp."<br>";
			echo "Costo del arroz: ".$cta."<br>";
			echo "Costo total: ".$ctt."<br>";
?>