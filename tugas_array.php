<?php
	$motor = array("Kawasaki","Ninjs","Supra","Jupiter MX","Vixion","Bison");

	echo "Saya sangat suka " . $motor[0] . " Dan " . $motor[3] .".";
	echo "<br>";
	echo "<h3>Contoh array indexed 2</h3>";
	

	$baju = array("gamis","jubah","kaos","koko");

	echo count($baju);
	echo "<br>";
	echo "<h3>Contoh indexed 3 </h3>";	

	$nama  = array("Bilal","Yahya","Tama","usman","Muhammad");
	$arrlength = count($nama);

	for ($x = 0; $x < $arrlength; $x++) {
		echo $nama[$x];
		echo "<br>";
	}
	echo "<br><h3>Contoh Dari array associative 1";
	echo "<br>";

	$nama = array("Bilal"=>"18", "Yahya"=>"21", "Muhammad"=>"19");

	echo "Bilal is " . $nama['Bilal'] . " years ";
	echo "<br><h3>Contoh Dari array associative 2";
	echo "<br>";

	$nomor = array("zaki"=>"17", "abid"=>"19", "Tama"=>"19", "Muhammad"=>"19");

	foreach ($nomor as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}


?>