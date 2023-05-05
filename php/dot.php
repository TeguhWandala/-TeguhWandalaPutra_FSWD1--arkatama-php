<?php
function upsideLeft($row=5,$symbol="*"){
	echo "triangle upside left";
	echo "<hr>";
	for($a=$row; $a>0; $a--) {
		for($b=$row; $b>=$a; $b--) {
			echo "$symbol";
		}
		echo "<br>";
	}
	echo "<br>";
}
?>

<?php
function upsideRight($row=5,$symbol="*"){
	echo "triangle upside right";
	echo "<hr>";
	for($a=$row;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo " &nbsp";
		}
		for($a1=$row;$a1>=$a;$a1--){
			echo"$symbol";
		}
		echo "<br>";
	}
}
?>

<?php
function downsideleft($row=5,$symbol="*"){
	echo "triangle downside left";
	echo "<hr>";
	for($a=1; $a<=$row; $a++){
		for($c=$row; $c>=$a; $c-=1){
			echo "$symbol";
		}
		echo "<br>";
	}
}
?>

<?php
function downsideright($row=5,$symbol="*"){
	echo "triangle downside right";
	echo "<hr>";
	for($a=1; $a<=$row; $a++){
		for($i=1; $i<=$a; $i++){
			echo " &nbsp";
		}
		for($c=$row; $c>=$a; $c-=1){
			echo "$symbol";
		}
		echo "<br>";
	}
}
?>

<?php
function printPattern($pattern) {
	if ($pattern == "UL") {
		upsideLeft(6, "$");
	} elseif ($pattern == "UR") {
		upsideright(9, "#");
	}elseif ($pattern == "DL") {
		downsideleft(10, "@");
	}elseif ($pattern == "DR") {
		downsideright(7, "*");
	}
}

printPattern("UL");
printPattern("UR");
printPattern("DL");
printPattern("DR");
?>
